CREATE DATABASE SessinCookies;

USE SessinCookies;

CREATE TABLE SesCoo(
    id_SesCoo INT PRIMARY KEY AUTO_INCREMENT,
    nom_SC VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL
);

INSERT INTO SesCoo (nom_SC,password) VALUES ("Asmae","Asmae");