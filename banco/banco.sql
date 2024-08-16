-- O esquema do banco precisa de revisão
-- Deleta o banco de dados Agama caso já exista
drop database if exists Agama;
-- Cria o banco de dados Agama caso não exista
create database if not exists Agama;
-- Utiliza o banco
use Agama;
-- Cria a tabela Cliente caso não exista
create table if not exists Cliente (
	id_cliente 			int auto_increment primary key,
    nome				varchar(100) not null,
    sobrenome			varchar(100) not null,
    nome_user			varchar(100) not null,
    email				varchar(200) not null,
    senha_cliente		varchar(100) not null,
    celular				varchar(8) not null,
    cidade				varchar(100),
    bairro				varchar(100),
    rua					varchar(100),
    numero				tinyint,
    cep					varchar(9)
);
-- Cria a tabela Profissional caso não exista
create table if not exists Profissional (
  id_prof				INT AUTO_INCREMENT PRIMARY KEY,
  primeironome 			VARCHAR(100) NOT NULL,
  sobrenome 			VARCHAR(100) NOT NULL,
  usuario 				VARCHAR(100) NOT NULL UNIQUE,
  celular 				VARCHAR(15) NOT NULL,
  email 				VARCHAR(100) NOT NULL UNIQUE,
  cnpj 					VARCHAR(20) NOT NULL,
  senha 				VARCHAR(255) NOT NULL,
  ramo 					VARCHAR(50) NOT NULL
);
-- Cria a tabela Serviço caso não exista
create table if not exists Servico (
	id_servico			int auto_increment primary key,
    id_prof				int,
    categoria			varchar(100) not null,
    preco				double not null,
    descricao			longtext not null,
    foto				blob not null,
    foreign key(id_prof) references Profissional(id_prof)
);
-- Cria a tabela Pagamento caso não exista
create table if not exists Pagamento (
	id_pag				int auto_increment primary key,
    valor				int not null,
    id_cliente			int,
    id_servico			int,
    foreign key(id_cliente) references Cliente(id_cliente),
    foreign key(id_servico) references Servico(id_servico)
);
-- Cria a tabela Chat caso não exista
create table if not exists Chat (
	id_chat				int auto_increment primary key,
    -- horario				bool current_time(), Não estou conseguindo fazer funcionar, verei dps
    remetente			varchar(100) not null,
    destinatario		varchar(100) not null,
    -- data				current_date, esse não funcionou tbm...
    id_cliente			int,
    id_prof				int,
    foreign key(id_cliente) references Cliente(id_cliente),
    foreign key(id_prof) references Profissional(id_prof)
);