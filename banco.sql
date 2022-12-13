create database login;

use login;

create table usuario(
    idusuario int primary key auto_increment,
    nome varchar (30),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')
);
insert into usuario values(null,'ana','admin',md5('123'),'adm');
insert into usuario values(null,'alice','usuario',md5('abc'),'user');

select * from usuario;

/*-------------------------------------------------------------------------------------*/

create database projeto1;

use projeto1;

create table cliente1(
    idcliente int primary key auto_increment,
    nome varchar (40),
    login varchar (40)unique,
     email varchar (40),
     senha varchar (50)  
);
insert into cliente1 values(null, 'ana','ana@gmail.com','ana@gmail.com',md5('2022'));

select * from cliente1;