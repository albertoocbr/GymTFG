-- ============================================================
--  GYM APP — Script de Base de Datos
--  Motor: MySQL 8+
--  Charset: utf8mb4 (soporta emojis y caracteres especiales)
-- ============================================================

CREATE DATABASE IF NOT EXISTS gym_app
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE gym_app;

-- ------------------------------------------------------------
--  Tabla: usuarios
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS usuarios (
  id              INT UNSIGNED    NOT NULL AUTO_INCREMENT,
  nombre          VARCHAR(120)    NOT NULL,
  email           VARCHAR(255)    NOT NULL,
  password_hash   VARCHAR(255)    NOT NULL,          -- bcrypt via password_hash()
  fecha_registro  DATETIME        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  ultimo_login    DATETIME            NULL,
  activo          TINYINT(1)      NOT NULL DEFAULT 1, -- soft delete / desactivar cuenta

  PRIMARY KEY (id),
  UNIQUE KEY uq_email (email),
  INDEX idx_activo (activo)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

-- ------------------------------------------------------------
--  Usuario de prueba:  demo@gym.app  /  GymDemo2025!
--  Hash generado con: password_hash('GymDemo2025!', PASSWORD_BCRYPT)
-- ------------------------------------------------------------
INSERT INTO usuarios (nombre, email, password_hash) VALUES
(
  'Demo User',
  'demo@gym.app',
  '$2y$12$eImiTXuWVxfM37uY4JANjuCRJMflS/FLzXXjKBinPGPAfn1xAoVW2'   -- GymDemo2025!
);



CREATE TABLE IF NOT EXISTS nutricion_consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    objetivo VARCHAR(50),
    mensaje TEXT,
    fecha_solicitud DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;