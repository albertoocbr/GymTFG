<?php


declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('Cache-Control: no-store');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'msg' => 'Método no permitido.']);
    exit;
}

require_once __DIR__ . '/db.php';

$body  = json_decode(file_get_contents('php://input'), true) ?? [];
$email = trim(filter_var($body['email'] ?? '', FILTER_SANITIZE_EMAIL));
$pass  = $body['password'] ?? '';

$errors = [];

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Introduce un email válido.';
}
if (empty($pass) || mb_strlen($pass) < 6) {
    $errors[] = 'La contraseña debe tener al menos 6 caracteres.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'msg' => $errors[0]]);
    exit;
}

try {
    $pdo  = get_db();
    $stmt = $pdo->prepare(
        'SELECT id, nombre, password_hash, activo
           FROM usuarios
          WHERE email = :email
          LIMIT 1'
    );
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'msg' => 'Error interno. Inténtalo de nuevo.']);
    exit;
}

if (!$user || !password_verify($pass, $user['password_hash'])) {
    http_response_code(401);
    echo json_encode(['ok' => false, 'msg' => 'Email o contraseña incorrectos.']);
    exit;
}

if (!(bool)$user['activo']) {
    http_response_code(403);
    echo json_encode(['ok' => false, 'msg' => 'Esta cuenta ha sido desactivada.']);
    exit;
}

if (password_needs_rehash($user['password_hash'], PASSWORD_BCRYPT, ['cost' => 12])) {
    $newHash = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 12]);
    $upd = $pdo->prepare('UPDATE usuarios SET password_hash = ? WHERE id = ?');
    $upd->execute([$newHash, $user['id']]);
}

$pdo->prepare('UPDATE usuarios SET ultimo_login = NOW() WHERE id = ?')
    ->execute([$user['id']]);

ini_set('session.cookie_httponly', '1');
ini_set('session.use_strict_mode', '1');
session_start();
session_regenerate_id(true); 

$_SESSION['user_id']    = $user['id'];
$_SESSION['user_nombre'] = $user['nombre'];

echo json_encode([
    'ok'       => true,
    'msg'      => '¡Bienvenido, ' . htmlspecialchars($user['nombre'], ENT_QUOTES) . '!',
    'redirect' => 'home.php'  
]);
