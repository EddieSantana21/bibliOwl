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

CREATE TABLE tbComentario (
    'id_comentario' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'comentario' varchar (500),
    'id_usuario' int
);

CREATE TABLE tbEditoras (
    'id_editora' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'nome_editora' varchar (100)
);

CREATE TABLE tbGeneros (
    'id_genero' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'nome_genero' varchar (100),
    'subGenero' varchar (100) /*SubGenero deve marcar generos afiliados, exemplo, o livro é de terror, porém tem um toque de suspense ou drama*/
);

CREATE TABLE tbClassificacoes(
    'id_classificacao' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'qtd_estrelas' int,
    'id_acervo' INT FOREIGN KEY REFERENCES tbAcervos(id_acervo),
    'id_usuario' INT FOREIGN KEY REFERENCES tbUsuarios(id_usuario)
);

CREATE TABLE tbReservas(
    'id_reserva' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'id_acervo' INT FOREIGN KEY REFERENCES tbAcervos(id_acervo),
    'id_usuario' INT FOREIGN KEY REFERENCES tbUsuarios(id_usuario),
    'status_acervo' INT FOREIGN KEY REFERENCES tbAcervos(status_acervo)
);

CREATE TABLE tbAutores(
    'id_autor' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'nome_autor' varchar (100)
);

CREATE TABLE tbAcervos (
    'id_acervo' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'titulo_acervo' varchar (100),
    'data_lancamento' date,
    'qtd_acervo' int,
    'cod_barras_acervo' int,
    'id_autor' INT FOREIGN KEY REFERENCES tbAutores(id_autor),
    'id_usuario' INT FOREIGN KEY REFERENCES tbUsuarios(id_usuario),
    'id_tipo_identificacao' INT FOREIGN KEY REFERENCES tbidentificacaoPublicacaoAcervo(id_tipo_identificacao),
    'id_editora' INT FOREIGN KEY REFERENCES tbEditoras(id_editora),
    'id_genero' INT FOREIGN KEY REFERENCES tbgeneros(id_genero),
    'id_prateleira' INT FOREIGN KEY REFERENCES tbPrateleiras(id_prateleira),
    'id_gondola' INT FOREIGN KEY REFERENCES tbGondolas(id_gondola),
    'id_numero_chamada_acervo' INT FOREIGN KEY REFERENCES tbNumero_chamada_acervos(id_numero_chamada_acervo),
    'id_status_acervo' INT FOREIGN KEY REFERENCES tbStatus_acervos(id_status_acervo)
);

CREATE TABLE tbidentificacaoPublicacaoAcervo(
    'id_tipo_identificacao' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'nome_identificacao' varchar (100)
);

CREATE TABLE tbStatus_acervos (
    'id_status_acervo' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'status_livro'varchar (100)
);

CREATE TABLE tbEmprestimos (
    'id_emprestimo' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'data_emprestimo' date,
    'data_devolucao' date,
    'tempo_emprestimo' varchar /*Aqui deve trazer opções de outra tabela informando as quantidades de dias disponiveis para ficar com o livro*/
    'id_administrador' int,
    'id_usuario' INT FOREIGN KEY REFERENCES tbUsuarios(id_usuario),
    'id_acervo' INT FOREIGN KEY REFERENCES tbAcervos(id_acervo),
    'situacao_emprestimo' varchar (100)
);

CREATE TABLE tbSancoes (
    'id_sancao' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'punicao' varchar (100),
    'id_usuario' INT FOREIGN KEY REFERENCES tbUsuarios(id_usuario),
    'situacao_sancao' /*Deve trazer a informação se o aluno está devendo algo*/
)

CREATE TABLE tbOrigem (
    'id_origem' INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    'origem_acervo' varchar (100)
)

CREATE TABLE tbDoacoes(
    
);
