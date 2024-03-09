
CREATE DATABASE IF NOT EXISTS bd_portafolio;


USE bd_portafolio;


CREATE TABLE proyectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
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

CREATE TABLE Mas_proyectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_otro_proyecto VARCHAR(255),
    ruta_mas_proyecto VARCHAR(255),
    descripcion_mas_proyecto TEXT,
    enlace_mas_proyecto TEXT
);