create database juanLopezGuia3;
use juanLopezGuia3;
create table clientes(
cli_id int(4) primary key auto_increment,
cli_nombre varchar(30),
cli_apellido varchar(30),
cli_dni varchar(20),
cli_tel varchar(20),
cli_direccion varchar(40)
);
drop table clientes;

create table empleados(
emp_id int(4) primary key auto_increment,
emp_nombre varchar(30),
emp_apellido varchar(30),
emp_dni varchar(20),
emp_tel varchar(20),
emp_sueldo float(6,2),
emp_fechaIn date,
rol_id int(3),
emp_direccion varchar(40),
foreign key (rol_id) references roles(rol_id)
);

drop table empleados;

create table roles(
rol_id int(3) auto_increment primary key,
rol_descripcion varchar(30)
);

select * from empleados;

select * from clientes;

insert into roles(rol_descripcion)values("Empleado");

insert into clientes(cli_nombre, cli_Apellido, cli_dni, cli_tel,cli_direccion)values("Matias","Karlen", "12.124.543","11-3453-5645","calle verdadera456");

insert into empleados(emp_nombre, emp_Apellido, emp_dni, emp_tel,emp_sueldo,emp_fechaIn,rol_id,emp_direccion)values("Juan","López", "44.403.375","15-5666-7040",80000,"2020-11-15",2,"Calle Falsa 123");