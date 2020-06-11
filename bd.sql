CREATE DATABASE crud_contatos;

create table contatos (
id_contato int unsigned auto_increment primary key,
nome varchar(80) not null,
telefone varchar(20) default null,
email varchar(80) default null
id_user int not null,
FOREIGN KEY(id_user) REFERENCES usuarios(id_user),
);


CREATE TABLE usuarios (
    id_user int not null primary key auto_increment,
    nome varchar(150) not null,
    email varchar(100) not null,
    senha varchar(50) not null,
    ativo boolean null default true,
    data_criacao datetime not null,
    data_atualizacao datetime not null
);