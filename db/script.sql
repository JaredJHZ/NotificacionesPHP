CREATE TABLE correos (
    email VARCHAR(25) NOT NULL PRIMARY KEY
);

CREATE TABLE notificaciones (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fecha_de_creacion DATETIME  DEFAULT CURRENT_TIMESTAMP ,
    fecha_de_notificacion DATETIME NOT NULL,
    email VARCHAR(25) NOT NULL,
    notificacion VARCHAR(500) NOT NULL,
    enviada BOOLEAN DEFAULT FALSE
);

ALTER TABLE notificaciones
ADD CONSTRAINT fk_notificacion
FOREIGN KEY (email) REFERENCES correos(email);



    