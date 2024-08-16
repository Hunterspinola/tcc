-- O esquema do banco precisa de revisão
-- Deleta o banco de dados Agama caso já exista
drop database if exists Agama;
-- Cria o banco de dados Agama caso não exista
create database if not exists Agama;
-- Utiliza o banco
use Agama;
-- Cria a tabela Serviço caso não exista
create table if not exists Serviço (
	id_serviço			int primary key auto_increment,
    categoria			varchar(100) not null,
    preco				double not null,
    descricao			text not null,
    foto				blob not null -- não sabia como fazer isso de colocar foto no banco, pesquisei e achei o tipo de variável BLOB.
);