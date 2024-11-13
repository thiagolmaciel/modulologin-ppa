CREATE DATABASE if not exists ppa_bdd;
USE ppa_bdd;

CREATE TABLE if not exists Usuarios(
  usuario varchar(9) primary Key not null,
  senha varchar(45) NOT NULL,
  email varchar(100) NOT NULL,
  acesso_poder boolean
);


