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
    email				varchar(200) not null unique,
    senha_cliente		varchar(255) not null,
    celular				varchar(15) not null,
    cidade				varchar(100),
    bairro				varchar(100),
    rua					varchar(100),
    numero			    int,
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

-- Cria a tabela Servico caso não exista
create table if not exists Servico (
	id_servico			int auto_increment primary key,
    id_prof				int,
    nome				varchar(100) not null,
    preco				float(10, 2) not null,
    descricao			varchar(200) not null,
    categoria			varchar(100) not null,
    foto				varchar(100) not null,
    foreign key(id_prof) references Profissional(id_prof)
);

-- Cria a tabela Pagamento caso não exista
create table if not exists Pagamento (
	id_pag				int auto_increment primary key,
    valor				float not null,
    id_cliente			int,
    id_servico			int,
    foreign key(id_cliente) references Cliente(id_cliente),
    foreign key(id_servico) references Servico(id_servico)
);

-- Cria a tabela Mensagem caso não exista
create table if not exists Mensagem (
	id_mensagem			int auto_increment primary key,
    id_remetente		int,
    id_destinatario		int,
    mensagem			longtext not null,
    data_envio			timestamp default current_timestamp,
    foreign key(id_remetente) references Profissional(id_prof),
    foreign key(id_destinatario) references Cliente(id_cliente)
);