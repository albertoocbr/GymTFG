<?php
declare(strict_types=1);
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['ok' => false, 'msg' => 'Método no permitido']);
    exit;
}

require_once __DIR__ . '/db.php';

$body = json_decode(file_get_contents('php://input'), true) ?? [];
$nombre = trim($body['nombre'] ?? '');
$email = trim(filter_var($body['email'] ?? '', FILTER_SANITIZE_EMAIL));
$pass = $body['password'] ?? '';

// Validaciones
if (empty($nombre) || empty($email) || mb_strlen($pass) < 6) {
    echo json_encode(['ok' => false, 'msg' => 'Por favor, rellena todos los campos correctamente.']);
    exit;
}

try {
    $pdo = get_db();
    
    // Verificar si el email existe
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['ok' => false, 'msg' => 'Este correo ya está registrado.']);
        exit;
    }

    // Insertar usuario
    $hash = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 12]);
    $ins = $pdo->prepare("INSERT INTO usuarios (nombre, email, password_hash) VALUES (?, ?, ?)");
    
    if ($ins->execute([$nombre, $email, $hash])) {
        echo json_encode(['ok' => true, 'msg' => '¡Cuenta creada con éxito! Ya puedes iniciar sesión.']);
    } else {
        echo json_encode(['ok' => false, 'msg' => 'Error al crear la cuenta.']);
    }

} catch (PDOException $e) {
    echo json_encode(['ok' => false, 'msg' => 'Error de base de datos.']);
}