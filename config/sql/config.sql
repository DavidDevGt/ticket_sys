
CREATE DATABASE IF NOT EXISTS ticket_sys_db;
USE ticket_sys_db;

CREATE TABLE rol (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(255),
    active BOOLEAN DEFAULT TRUE
);

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    rol_id INT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_edicion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    usuario_edicion_id INT,
    active BOOLEAN DEFAULT TRUE
);

CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    direccion TEXT,
    telefono VARCHAR(20),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_edicion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    usuario_edicion_id INT,
    active BOOLEAN DEFAULT TRUE
);

CREATE TABLE ticket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    cliente_id INT NOT NULL,
    estado INT NOT NULL DEFAULT 1,
    fecha_creacion DATETIME NOT NULL,
    fecha_edicion DATETIME,
    usuario_creacion_id INT NOT NULL,
    usuario_edicion_id INT,
    active BOOLEAN NOT NULL DEFAULT TRUE
);