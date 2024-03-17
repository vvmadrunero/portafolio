
CREATE DATABASE IF NOT EXISTS bd_portafolio;


USE bd_portafolio; 

CREATE TABLE security_codes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    default_code VARCHAR(6) NOT NULL
);

CREATE TABLE proyectos (
    id_proyecto INT AUTO_INCREMENT PRIMARY KEY,
    nombre_proyecto VARCHAR(255),
    ruta_imagen VARCHAR(255),
    descripcion_proyecto TEXT,
    enlace_proyecto TEXT

);

CREATE TABLE certificados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_certf VARCHAR(255) NOT NULL,
    ruta_documento VARCHAR(255) NOT NULL
);


