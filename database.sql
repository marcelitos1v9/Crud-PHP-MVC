create database escola;
use escola;

create table alunos(
codigo int(5) auto_increment primary key,
nome varchar(70) not null,
cidade varchar(50) not null,
sexo varchar(2) not null
);