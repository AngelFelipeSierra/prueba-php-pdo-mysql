# prueba-php-pdo-mysql
CREATE DATABASE campuslands;

CREATE TABLE departamento (idDep int, nombreDep varchar(50), idPais int);

CREATE TABLE pais (idPais int, nombrePais varchar(50));

CREATE TABLE region (idReg int, nombreReg varchar(50), idDep int);

CREATE TABLE camper (idCamper varchar(20), nombreCamper varchar(50), apellidoCamper varchar(50), fechaNac date, idReg int);

ALTER TABLE pais ADD CONSTRAINT PK_pais PRIMARY KEY (idPais);

ALTER TABLE departamento ADD CONSTRAINT PK_departamento PRIMARY KEY (idDep);

ALTER TABLE departamento ADD CONSTRAINT FK_departamento FOREIGN KEY (idPais) REFERENCES pais (idPais);

ALTER TABLE region ADD CONSTRAINT PK_region PRIMARY KEY (idReg);

ALTER TABLE region ADD CONSTRAINT FK_region FOREIGN KEY (idDep) REFERENCES departamento (idDep);

ALTER TABLE camper ADD CONSTRAINT PK_camper PRIMARY KEY (idCamper);

ALTER TABLE camper ADD CONSTRAINT FK_camper FOREIGN KEY (idReg) REFERENCES region (idReg);

INSERT INTO camper (idCamper,nombreCamper,apellidoCamper) VALUES (1,"Angel","Sierra");

INSERT INTO camper (idCamper,nombreCamper,apellidoCamper) VALUES (2,"Fabian","Becerra");

INSERT INTO camper (idCamper,nombreCamper,apellidoCamper) VALUES (3,"Erick","Ortiz");

INSERT INTO departamento (idDep, nombreDep) VALUES (1,"Santander");

INSERT INTO departamento (idDep, nombreDep) VALUES (2,"Amazonas");

INSERT INTO pais (idPais, nombrePais) VALUES (1,"Colombia");

INSERT INTO pais (idPais, nombrePais) VALUES (1,"Colombia");

INSERT INTO region (idReg, nombreReg) VALUES (1,"Caribe");