-- Deleta o banco de dados Agama caso já exista
drop database if exists Agama;

-- Cria o banco de dados Agama caso não exista
create database if not exists Agama;

-- Utiliza o banco
use Agama;

-- Cria a tabela Usuário caso não exista
create table if not exists Usuario (
	id					int auto_increment primary key,
    nome				varchar(100) not null,
    sobrenome			varchar(100) not null,
    nome_user			varchar(100) not null,
    email				varchar(100) not null unique,
    senha				varchar(255) not null,
    celular				varchar(15) not null,
    cidade				varchar(100),
    bairro				varchar(100),
    rua					varchar(100),
    numero				int,
    cep					varchar(9),
    ativo				tinyint not null default '0',
    profissional		tinyint not null default '0',
    adm					tinyint not null default '0'
);

-- Cria a tabela Servico caso não exista
create table if not exists Servico (
	id_servico			int auto_increment primary key,
    id_usuario			int,
    nome				varchar(100) not null,
    preco				float(10, 2) not null,
    descricao			varchar(200) not null,
    categoria			varchar(100) not null,
    foto				varchar(100) not null,
    foreign key(id_usuario) references Usuario(id)
);

-- Cria a tabela Pagamento caso não exista
create table if not exists Pagamento (
	id_pag				int auto_increment primary key,
    valor				float not null,
    id_usuario			int,
    id_servico			int,
    foreign key(id_usuario) references Usuario(id),
    foreign key(id_servico) references Servico(id_servico)
);

-- Cria a tabela Mensagem caso não exista
create table if not exists Mensagem (
	id_mensagem			int auto_increment primary key,
    id_usuario			int,
    mensagem			longtext not null,
    data_envio			timestamp default current_timestamp,
    foreign key (id_usuario) references Usuario(id)
);