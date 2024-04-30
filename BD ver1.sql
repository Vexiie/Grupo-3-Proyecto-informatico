create database TLinos;
use Tlinos;
create table animales(
ID int auto_increment primary key,
nombre varchar(85),
especie varchar(50),
razacolor varchar(40),
edad double(3,2),
localidad varchar(50),
descripcion varchar(150),
fecharescate date,
adoptado boolean
);
create table usuarios(
ID int(10) primary key,
nombrecompleto varchar(85),
usuario varchar(20),
contraseña varchar(20),
DNI int(8),
descripcion int(150),
localidad int(50),
animalfav varchar(50)
);
create table adopciones(
ID int(10) primary key,
ID_animal int(10),
ID_user int(10),
fecha_adopcion date,
foreign key (ID_user) references usuarios(id),
foreign key (ID_animal) references animales(id)
);
