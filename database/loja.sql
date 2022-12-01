CREATE DATABASE IF NOT EXISTS loja;
USE loja;

CREATE TABLE usuario (
    idUsuario INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    tipoUsuario VARCHAR(10) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    email VARCHAR(100) NULL DEFAULT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    telefone VARCHAR(11) NULL DEFAULT NULL,
    cpf VARCHAR(11) NOT NULL,
    rg VARCHAR(9) NULL DEFAULT NULL,
    genero VARCHAR(50) NOT NULL,
    imagem VARCHAR(100) NULL DEFAULT NULL,
    PRIMARY KEY (idUsuario)
);

CREATE TABLE categoria (
    idCategoria INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    PRIMARY KEY (idCategoria)
);

CREATE TABLE produto (
    idProduto INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    valorUnit DECIMAL(9,2) NOT NULL,
    lote VARCHAR(15) NOT NULL, 
    embalagem VARCHAR(50) NULL DEFAULT NULL, 
    imagem VARCHAR(100) NULL DEFAULT NULL,
    idCategoria INT NOT NULL,
    PRIMARY KEY (idProduto),
    CONSTRAINT fk_produto_categoria
        FOREIGN KEY (idCategoria)
        REFERENCES loja.categoria (idCategoria)
);

CREATE TABLE kit (
    idKit INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    valorKit DECIMAL(9,2) NOT NULL,
    PRIMARY KEY (idKit)
);

CREATE TABLE venda (
    idVenda INT NOT NULL AUTO_INCREMENT,
    dataVenda DATE NOT NULL,
    valorTotal DECIMAL(9,2),
    idUsuario INT NOT NULL,
    idProduto INT NULL,
    idKit INT NULL,
    PRIMARY KEY (idVenda),

    CONSTRAINT fk_venda_usuario
    FOREIGN KEY (idUsuario)
    REFERENCES loja.usuario (idUsuario),

    CONSTRAINT fk_venda_produto
    FOREIGN KEY (idProduto)
    REFERENCES loja.produto (idProduto),

    CONSTRAINT fk_venda_kit
    FOREIGN KEY (idKit)
    REFERENCES loja.kit (idKit)
);



-- INSERT INTO usuario (nome, tipoUsuario, endereco, email, telefone, cpf, rg, genero) VALUES ('Gab', 'admin', 'XXXX', 'XXXX', 00000000000, 00000000000, 000000000, 'XXXX');
-- INSERT INTO usuario (nome, tipoUsuario, endereco, email, telefone, cpf, rg, genero) VALUES ('Kayky', 'admin', 'XXXX', 'XXXX', 00000000000, 00000000000, 000000000, 'XXXX');