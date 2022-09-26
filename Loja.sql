CREATE DATABASE IF NOT EXISTS Loja;

USE Loja;

CREATE TABLE Loja . Clientes (
    idCliente INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(100) NOT NULL,
    Endereco VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NULL DEFAULT NULL,
    Telefone INT(11) NULL DEFAULT NULL,
    CPF INT(11) NOT NULL,
    PRIMARY KEY (idCliente)
);

CREATE TABLE Loja . Produtos (
    idProduto INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(100) NOT NULL,
    Descrição VARCHAR(100) NOT NULL,
    VlrUnitario DECIMAL(9,2) NOT NULL,
    Lote VARCHAR(15) NOT NULL, 
    PRIMARY KEY (idProduto)
)

CREATE TABLE Loja . Kits (
    idKit INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(100) NOT NULL,
    Descrição VARCHAR(100) NOT NULL,
    VlrKit DECIMAL(9,2) NOT NULL,
    PRIMARY KEY (idKit)
)

CREATE TABLE Loja . Venda (
    idVenda INT NOT NULL AUTO_INCREMENT,
    DataVenda DATE NOT NULL,
    ValorTotal DECIMAL(9,2),
    idCliente INT NOT NULL,
    idProduto INT NULL,
    idKit INT NULL,
    PRIMARY KEY (idVenda),
    CONSTRAINT fk_Venda_Clientes
    FOREIGN KEY (idCliente)
    REFERENCES Loja . Clientes (idCliente),
    CONSTRAINT fk_Venda_Produtos
    FOREIGN KEY (idProduto)
    REFERENCES Loja . Produtos (idCliente),
    CONSTRAINT fk_Venda_Kits
    FOREIGN KEY (idKit)
    REFERENCES Loja . Kits (idKit),
)