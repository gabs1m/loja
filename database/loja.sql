DROP DATABASE IF EXISTS loja;
CREATE DATABASE loja;
USE loja;

CREATE TABLE loja.clientes (
    idCliente INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    email VARCHAR(100) NULL DEFAULT NULL,
    telefone INT(11) NULL DEFAULT NULL,
    cpf INT(11) NOT NULL,
    PRIMARY KEY (idCliente)
);

CREATE TABLE loja.produtos (
    idProduto INT NOT NULL AUTO_INCREMENT,
    
)