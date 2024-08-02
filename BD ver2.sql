create database TLinos;
use Tlinos;
create table animales(
ID int auto_increment primary key,
nombre varchar(85),
sexo varchar(10),
especie varchar(50),
razacolor varchar(40),
edad double(3,2),
localidad varchar(50),
descripcion varchar(150),
fecharescate date,
adoptado boolean
);
create table usuarios(
ID int auto_increment primary key,
nombrecompleto varchar(85),
usuario varchar(20),
contraseña varchar(20),
DNI int(8),
descripcion varchar(150),
localidad varchar(50),
animalfav varchar(50)
);
ALTER TABLE `tlinos`.`usuarios` 
ADD COLUMN `sexo` VARCHAR(10) NULL DEFAULT NULL AFTER `DNI`,
ADD COLUMN `fechanacimiento` DATE NULL DEFAULT NULL AFTER `sexo`,
CHANGE COLUMN `DNI` `DNI` INT(8) NULL DEFAULT NULL AFTER `nombrecompleto`,
CHANGE COLUMN `localidad` `localidad` VARCHAR(50) NULL DEFAULT NULL AFTER `fechanacimiento`;
create table adopciones(
ID int auto_increment primary key,
ID_animal int(10),
ID_user int(10),
fecha_adopcion date,
foreign key (ID_user) references usuarios(id),
foreign key (ID_animal) references animales(id)
);
