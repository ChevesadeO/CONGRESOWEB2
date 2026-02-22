CREATE DATABASE congreso_db;
USE congreso_db;

CREATE TABLE inscripciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(100) NOT NULL,
    cedila VARCHAR(20) NOT NULL,
    carrera VARCHAR(100) NOT NULL,
    anio INT NOT NULL,
    conferencias TEXT NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


