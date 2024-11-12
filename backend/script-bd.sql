CREATE DATABASE if not exists PPA;
USE PPA;

CREATE TABLE if not exists Usuario(
  usuario varchar(10) primary Key not null,
  senha varchar(45) NOT NULL,
  email varchar(100) NOT NULL,
  acesso_poder boolean
);


