CREATE DATABASE IF NOT EXISTS loja;
USE loja;

CREATE TABLE cliente (
    idCliente INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    email VARCHAR(100) NULL DEFAULT NULL,
    telefone INT(11) NULL DEFAULT NULL,
    cpf INT(11) NOT NULL,
    PRIMARY KEY (idCliente)
);

CREATE TABLE produto (
    idProduto INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    valorUnit DECIMAL(9,2) NOT NULL,
    lote VARCHAR(15) NOT NULL, 
    PRIMARY KEY (idProduto)
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
    idCliente INT NOT NULL,
    idProduto INT NULL,
    idKit INT NULL,
    PRIMARY KEY (idVenda),

    CONSTRAINT fk_venda_cliente
    FOREIGN KEY (idCliente)
    REFERENCES loja.cliente (idCliente),

    CONSTRAINT fk_venda_produto
    FOREIGN KEY (idProduto)
    REFERENCES loja.produto (idProduto),

    CONSTRAINT fk_venda_kit
    FOREIGN KEY (idKit)
    REFERENCES loja.kit (idKit)
);