<?php
declare(strict_types=1);
header('Content-Type: application/json');

require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['ok' => false, 'msg' => 'Método no permitido']);
    exit;
}

$body = json_decode(file_get_contents('php://input'), true) ?? [];
$nombre = trim($body['nombre'] ?? '');
$email = trim(filter_var($body['email'] ?? '', FILTER_SANITIZE_EMAIL));
$objetivo = $body['objetivo'] ?? '';
$mensaje = trim($body['mensaje'] ?? '');

if (empty($nombre) || empty($email)) {
    echo json_encode(['ok' => false, 'msg' => 'Por favor, rellena los campos obligatorios.']);
    exit;
}

try {
    $pdo = get_db();
    $sql = "INSERT INTO nutricion_consultas (nombre, email, objetivo, mensaje) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$nombre, $email, $objetivo, $mensaje])) {
        echo json_encode(['ok' => true, 'msg' => '¡Solicitud enviada! Te contactaremos pronto.']);
    } else {
        echo json_encode(['ok' => false, 'msg' => 'No se pudo enviar la solicitud.']);
    }
} catch (PDOException $e) {
    echo json_encode(['ok' => false, 'msg' => 'Error en la base de datos.']);
}