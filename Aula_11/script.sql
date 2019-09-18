create database chat;

use chat;

create table user(
	id int primary key auto_increment,
	nome varchar(45) not null
	);
create table mensagem(
	id int primary key auto_increment,
	mensagem varchar(200) not null,
	destino int,
	origem int,
	foreign key (origem) references user (id)
	);