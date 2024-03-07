
CREATE DATABASE IF NOT EXISTS bd_portafolio;


USE bd_portafolio;


CREATE TABLE proyectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_imagen VARCHAR(255),
    ruta_imagen VARCHAR(255),
    descripcion TEXT,
    enlace TEXT
);

CREATE TABLE Certificados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_certf VARCHAR(255),
    ruta_certf VARCHAR(255),
    descripcion_certf TEXT,
    enlace_certf TEXT
);


CREATE TABLE Mas_proyectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_proyecto VARCHAR(255),
    ruta_proyecto VARCHAR(255),
    descripcion_proyecto TEXT,
    enlace_proyecto TEXT
);