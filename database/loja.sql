CREATE DATABASE IF NOT EXISTS loja;
USE loja;

CREATE TABLE clientes (
    idCliente INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    email VARCHAR(100) NULL DEFAULT NULL,
    telefone INT(11) NULL DEFAULT NULL,
    cpf INT(11) NOT NULL,
    PRIMARY KEY (idCliente)
);

CREATE TABLE produtos (
    idProduto INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descrição VARCHAR(100) NOT NULL,
    valorUnit DECIMAL(9,2) NOT NULL,
    lote VARCHAR(15) NOT NULL, 
    PRIMARY KEY (idProduto)
)

CREATE TABLE Kits (
    idKit INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descrição VARCHAR(100) NOT NULL,
    valorKit DECIMAL(9,2) NOT NULL,
    PRIMARY KEY (idKit)
)

CREATE TABLE venda (
    idVenda INT NOT NULL AUTO_INCREMENT,
    dataVenda DATE NOT NULL,
    valorTotal DECIMAL(9,2),
    idCliente INT NOT NULL,
    idProduto INT NULL,
    idKit INT NULL,
    PRIMARY KEY (idVenda),

    CONSTRAINT fk_Venda_Clientes
    FOREIGN KEY (idCliente)
    REFERENCES loja.clientes (idCliente),

    CONSTRAINT fk_Venda_Produtos
    FOREIGN KEY (idProduto)
    REFERENCES loja.produtos (idCliente),
    
    CONSTRAINT fk_Venda_Kits
    FOREIGN KEY (idKit)
    REFERENCES loja.kits (idKit),
)