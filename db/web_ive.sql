CREATE DATABASE web_ive;

USE web_ive;

CREATE TABLE equipos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,  -- Nueva columna para almacenar el slug
    descripcion TEXT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    activo BOOLEAN DEFAULT TRUE
);

-- Insertar equipos con slug
INSERT INTO equipos (nombre, slug, descripcion)
VALUES 
('Redviva', 'red-viva', 'Equipo de jóvenes apasionados por Dios.'),
('Adulto Mayor', 'adulto-mayor', 'Equipo que acompaña a los adultos en su caminar espiritual.');
