  CREATE DATABASE IF NOT EXISTS ppa_bdd;
  USE ppa_bdd;

  CREATE TABLE IF NOT EXISTS Usuarios(
    usuario VARCHAR(9) PRIMARY KEY NOT NULL,
    nome VARCHAR(200) NOT NULL,
    endereco VARCHAR(200) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
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

  INSERT IGNORE INTO Usuarios (usuario, nome, endereco, telefone, senha, email, acesso_poder) 
  VALUES ('BV1111111', 'Adm', 'Administração', '8638542954', 'adm', 'adm@gmail.com', true), 
  ('BV0000000', 'Aluno', 'Alunação', '7724114565', 'aluno', 'aluno@gmail.com', false);
