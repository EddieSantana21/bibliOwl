CREATE DATABASE IF NOT EXISTS dbBibliowl;

USE dbBibliowl;

CREATE TABLE IF NOT EXISTS tbTiposUsuarios (
    `id_tipo` INT PRIMARY KEY AUTO_INCREMENT,
    `tipo_usuario` VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS tbUsuarios (
    `id_usuario` INT PRIMARY KEY AUTO_INCREMENT,
    `nome_usuario` VARCHAR(100) NOT NULL,
    `email_usuario` VARCHAR(100) NOT NULL UNIQUE,
    `senha_usuario` VARCHAR(50) NOT NULL,
    `telefone_usuario` VARCHAR(15),
    `id_tipo` INT NOT NULL,
    `registro_usuario` VARCHAR(13) UNIQUE,
    FOREIGN KEY (`id_tipo`) REFERENCES tbTiposUsuarios(`id_tipo`)
);

CREATE TABLE IF NOT EXISTS tbCursos (
    `id_curso` INT PRIMARY KEY AUTO_INCREMENT,
    `nome_curso` VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS tbPeriodos (
    `id_periodo` INT PRIMARY KEY AUTO_INCREMENT,
    `nome_periodo` VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS tbAlunos (
    `id_aluno` INT PRIMARY KEY AUTO_INCREMENT,
    `id_usuario` INT NOT NULL,
    `id_curso` INT,
    `id_periodo` INT,
    FOREIGN KEY (`id_usuario`) REFERENCES tbUsuarios(`id_usuario`),
    FOREIGN KEY (`id_curso`) REFERENCES tbCursos(`id_curso`),
    FOREIGN KEY (`id_periodo`) REFERENCES tbPeriodos(`id_periodo`)
);

CREATE TABLE IF NOT EXISTS tbTelefones (
    `id_telefone` INT PRIMARY KEY AUTO_INCREMENT,
    `telefone` VARCHAR(15) NOT NULL
);

CREATE TABLE IF NOT EXISTS tbComentarios (
    `id_comentario` INT PRIMARY KEY AUTO_INCREMENT,
    `comentario` VARCHAR(500),
    `id_usuario` INT,
    FOREIGN KEY (`id_usuario`) REFERENCES tbUsuarios(`id_usuario`)
);

CREATE TABLE IF NOT EXISTS tbEditoras (
    `id_editora` INT PRIMARY KEY AUTO_INCREMENT,
    `nome_editora` VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS tbGeneros (
    `id_genero` INT PRIMARY KEY AUTO_INCREMENT,
    `nome_genero` VARCHAR(100),
    `subGenero` VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS tbAutores (
    `id_autor` INT PRIMARY KEY AUTO_INCREMENT,
    `nome_autor` VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS tbIdentificacaoPublicacaoAcervos (
    `id_tipo_identificacao` INT PRIMARY KEY AUTO_INCREMENT,
    `nome_identificacao` VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS tbAcervos (
    `id_acervo` INT PRIMARY KEY AUTO_INCREMENT,
    `titulo_acervo` VARCHAR(100),
    `data_lancamento` DATE,
    `qtd_acervo` INT,
    `cod_barras_acervo` VARCHAR(50),  -- Alterado para VARCHAR para acomodar códigos de barras
    `id_autor` INT,
    `id_usuario` INT,
    `id_tipo_identificacao` INT,
    `id_editora` INT,
    `id_genero` INT,
    `id_prateleira` INT,  -- Definir essa tabela, se necessário
    `id_gondola` INT,     -- Definir essa tabela, se necessário
    `id_numero_chamada_acervo` INT,
    `id_status_acervo` INT,
    FOREIGN KEY (`id_autor`) REFERENCES tbAutores(`id_autor`),
    FOREIGN KEY (`id_usuario`) REFERENCES tbUsuarios(`id_usuario`),
    FOREIGN KEY (`id_tipo_identificacao`) REFERENCES tbIdentificacaoPublicacaoAcervos(`id_tipo_identificacao`),
    FOREIGN KEY (`id_editora`) REFERENCES tbEditoras(`id_editora`),
    FOREIGN KEY (`id_genero`) REFERENCES tbGeneros(`id_genero`)
);

CREATE TABLE IF NOT EXISTS tbClassificacoes (
    `id_classificacao` INT PRIMARY KEY AUTO_INCREMENT,
    `qtd_estrelas` INT,
    `id_acervo` INT,
    `id_usuario` INT,
    FOREIGN KEY (`id_acervo`) REFERENCES tbAcervos(`id_acervo`),
    FOREIGN KEY (`id_usuario`) REFERENCES tbUsuarios(`id_usuario`)
);

CREATE TABLE IF NOT EXISTS tbReservas (
    `id_reserva` INT PRIMARY KEY AUTO_INCREMENT,
    `id_acervo` INT,
    `id_usuario` INT,
    `status_acervo` INT,
    FOREIGN KEY (`id_acervo`) REFERENCES tbAcervos(`id_acervo`),
    FOREIGN KEY (`id_usuario`) REFERENCES tbUsuarios(`id_usuario`)
);

CREATE TABLE IF NOT EXISTS tbStatusAcervos (
    `id_status_acervo` INT PRIMARY KEY AUTO_INCREMENT,
    `status_livro` VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS tbEmprestimos (
    `id_emprestimo` INT PRIMARY KEY AUTO_INCREMENT,
    `data_emprestimo` DATE,
    `data_devolucao` DATE,
    `tempo_emprestimo` INT,
    `id_administrador` INT,
    `id_usuario` INT,
    `id_acervo` INT,
    `situacao_emprestimo` VARCHAR(100),
    FOREIGN KEY (`id_usuario`) REFERENCES tbUsuarios(`id_usuario`),
    FOREIGN KEY (`id_acervo`) REFERENCES tbAcervos(`id_acervo`)
);

CREATE TABLE IF NOT EXISTS tbSancoes (
    `id_sancao` INT PRIMARY KEY AUTO_INCREMENT,
    `punicao` VARCHAR(100),
    `id_usuario` INT,
    `situacao_sancao` VARCHAR(100),
    FOREIGN KEY (`id_usuario`) REFERENCES tbUsuarios(`id_usuario`)
);

CREATE TABLE IF NOT EXISTS tbOrigens (
    `id_origem` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `origem_acervo` VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS tbDoacoes(
    `id_doacao` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `id_acervo` INT,
    `id_origem` INT,
    `id_doador` INT,
    `id_receptor` INT,
    FOREIGN KEY (`id_acervo`) REFERENCES tbAcervos(`id_acervo`),
    FOREIGN KEY (`id_origem`) REFERENCES tbOrigens(`id_origem`),
    FOREIGN KEY (`id_doador`) REFERENCES tbUsuarios(`id_usuario`),
    FOREIGN KEY (`id_receptor`) REFERENCES tbUsuarios(`id_usuario`)
);
