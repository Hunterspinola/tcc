-- ESSE BANCO FOI DESCONSIDERADO. APENAS NÃO APAGUEI POR NÃO TER CERTEZA DE SUA NECESSIDADE
-- Deleta o banco de dados Agama caso já exista
drop database if exists Agama;
-- Cria o banco de dados Agama caso não exista
create database Agama;
-- Utiliza o banco
use Agama;

CREATE TABLE if not exists usuario (
    id              int NOT NULL  AUTO_INCREMENT,
    nome            varchar(50) NOT NULL,
    sobrenome		varchar(50) not null,
    user_name		varchar(100) not null,
    email           varchar(255) NOT NULL,
    senha           varchar(60) NOT NULL,
    data_criacao    datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    profissional    tinyint NOT NULL DEFAULT '0',
    ativo           tinyint NOT NULL DEFAULT '0',
    PRIMARY KEY (id)
);

-- Cria a tabela Servico caso não exista
CREATE TABLE  servico (
	id_servico			int auto_increment primary key,
    id				    int,
    titulo              VARCHAR(100),
    texto               VARCHAR(100),
    telefone            CHAR(15),
    foto                VARCHAR(100),
    foreign key(id) references usuario(id)
);