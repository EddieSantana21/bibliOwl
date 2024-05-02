CREATE DATABASE dbBibliowl;

USE dbBibliowl;

CREATE TABLE tbUsuarios (
    'id_usuario' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'nome_usuario' varchar(100) NOT NULL,
    'email_usuario' varchar(100) NOT NULL UNIQUE,
    'senha_usuario' varchar(50) NOT NULL,
    'telefone_usuario' varchar(15) NOT NULL,
    'id_tipo' int NOT NULL,
    'registro_usuario' varchar(13) UNIQUE,
    FOREIGN KEY ('id_tipo') REFERENCES tbTipoUsuarios(id_tipo)
    );

CREATE TABLE tbTiposUsuarios (
    'id_tipo' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'tipo_usuario' varchar(50) NOT NULL
);

CREATE TABLE tbAlunos (
    'id_aluno' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'id_curso' INT FOREIGN KEY REFERENCES tbCursos(id_curso),
    'id_periodo' INT FOREIGN KEY REFERENCES tbPeriodos(id_periodo),
    'id_tipo' INT FOREIGN KEY REFERENCES tbTiposUsuarios(id_tipo)
);

CREATE TABLE tbCursos (
    'id_curso' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'nome_curso' varchar(100) NOT NULL
);

CREATE TABLE tbPeriodos (
    'idPeriodo' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'nome_periodo' varchar(50) NOT NULL
);

CREATE TABLE tbTelefones (
    'id_telefone' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'telefone1' varchar(15) NOT NULL,
    'telefone2' varchar(15) NOT NULL
);