create database juanLopezGuia3;
use juanLopezGuia3;
create table clientes(
cli_id int(4) primary key auto_increment,
cli_nombre varchar(30),
cli_apellido varchar(30),
cli_dni varchar(20),
cli_tel varchar(20)
);

create table empleados(
emp_id int(4) primary key auto_increment,
emp_nombre varchar(30),
emp_apellido varchar(30),
emp_dni varchar(20),
emp_tel varchar(20),
emp_sueldo float(6,2),
rol_id int(3),
foreign key (rol_id) references roles(rol_id)
);

create table roles(
rol_id int(3) auto_increment primary key,
rol_descripcion varchar(30)
);