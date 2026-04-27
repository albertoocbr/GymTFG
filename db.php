<?php
// ============================================================
//  db.php — Conexión segura a MySQL mediante PDO
//  Ajusta las constantes según tu entorno
// ============================================================

declare(strict_types=1);

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
define('DB_NAME', 'gym_app');
define('DB_USER', 'root');        // ← Cambia en producción
define('DB_PASS', '');            // ← Cambia en producción
define('DB_CHARSET', 'utf8mb4');

function get_db(): PDO
{
    static $pdo = null;

    if ($pdo !== null) {
        return $pdo;
    }

    $dsn = sprintf(
        'mysql:host=%s;port=%s;dbname=%s;charset=%s',
        DB_HOST, DB_PORT, DB_NAME, DB_CHARSET
    );

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  // Lanza excepciones
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        // Arrays asociativos
        PDO::ATTR_EMULATE_PREPARES   => false,                   // Sentencias reales
        PDO::MYSQL_ATTR_FOUND_ROWS   => true,
    ];

    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    } catch (PDOException $e) {
        // En producción: loguear el error real, mostrar mensaje genérico
        http_response_code(503);
        header('Content-Type: application/json');
        echo json_encode(['ok' => false, 'msg' => 'Error de conexión a la base de datos.']);
        exit;
    }

    return $pdo;
}
