CREATE DATABASE IF NOT EXISTS ppa_bdd;
USE ppa_bdd;

CREATE TABLE IF NOT EXISTS Usuarios(
  usuario VARCHAR(9) PRIMARY KEY NOT NULL,
  senha VARCHAR(45) NOT NULL,
  email VARCHAR(100) NOT NULL,
  acesso_poder BOOLEAN NOT NULL
);

CREATE TABLE IF NOT EXISTS UsuariosPendentes(
  usuario VARCHAR(9) PRIMARY KEY NOT NULL,
  nome VARCHAR(200) NOT NULL,
  endereco VARCHAR(200) NOT NULL,
  telefone VARCHAR(11) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  email VARCHAR(100) NOT NULL,
  acesso_poder BOOLEAN NOT NULL
);

INSERT IGNORE INTO 'Usuarios' (usuario, senha, email, acesso_poder) 
VALUES ('BV0000000', 'test', 'test@gmail.com', false);
