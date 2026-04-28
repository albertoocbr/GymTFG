CREATE DATABASE IF NOT EXISTS gym_app
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE gym_app;

CREATE TABLE IF NOT EXISTS usuarios (
  id              INT UNSIGNED    NOT NULL AUTO_INCREMENT,
  nombre          VARCHAR(120)    NOT NULL,
  email           VARCHAR(255)    NOT NULL,
  password_hash   VARCHAR(255)    NOT NULL,        
  fecha_registro  DATETIME        NOT NULL DEFAULT CURRENT_TIMESTAMP,
  ultimo_login    DATETIME            NULL,
  activo          TINYINT(1)      NOT NULL DEFAULT 1,

  PRIMARY KEY (id),
  UNIQUE KEY uq_email (email),
  INDEX idx_activo (activo)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;
INSERT INTO usuarios (nombre, email, password_hash) VALUES
(
  'Demo User',
  'demo@gym.app',
  '$2y$12$eImiTXuWVxfM37uY4JANjuCRJMflS/FLzXXjKBinPGPAfn1xAoVW2'  
);
