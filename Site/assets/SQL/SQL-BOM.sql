CREATE DATABASE TRABALHO_ES;
use TRABALHO_ES;

CREATE TABLE Aluno (
	Id integer not null auto_increment,
	RA varchar (13) not null,
    CPF varchar (11) not null,
    senha varchar (8) not null,
	nome varchar (50) not null,
	email varchar (50) not null,
	telefone varchar (11),
	endereco varchar (50),
	dt_matricula date,
	curso varchar (50) not null,
	periodo varchar (10),
    
    CONSTRAINT IdAluno PRIMARY KEY (Id)
);

CREATE TABLE Curriculo (
	Id integer not null auto_increment,
    Id_aluno integer,
	resumo varchar (300) not null,
    certificacao varchar (50) not null,
	nome varchar (50) not null,
	email varchar (50) not null,
	telefone varchar (30),
	endereco varchar (50),
	dt_matricula date,
    idiomas varchar (30),
	curso varchar (50) not null,
    cursos_extra varchar (50),
    experiencia_prof varchar (300),
    habilidades varchar (300),
	periodo varchar (10),
    
    CONSTRAINT IdCurriculo PRIMARY KEY (Id),
    constraint Fk_cv_aluno foreign key (Id_aluno) references Aluno (Id)
);

Create table Item_aluno (
	Id_aluno integer,
    constraint Fk_italuno_aluno foreign key (Id_aluno) references Aluno (Id)
);

CREATE TABLE Empresa (
	Id integer not null auto_increment,
	CNPJ varchar (20) not null,
    senha varchar (8) not null,
	nome varchar (50) not null,
	email varchar (50) not null,
	telefone varchar (30),
	endereco varchar (50) not null,
	area_atuacao varchar (100) not null,
    
    CONSTRAINT IdEmpresa PRIMARY KEY (Id)
);

Create table Acesso_curriculo (
	Id_curriculo integer,
    Id_empresa integer,
    
    constraint Fk_asscurriculo_curriculo foreign key (Id_curriculo) references Curriculo (Id),
    constraint Fk_asscurriculo_empresa foreign key (Id_empresa) references Empresa (Id)
);

CREATE TABLE Publicacao (
	Autor integer not null auto_increment,
	horario time,
    descricao varchar (300) not null,
	data_evento date,
    data_curso date,
    evento varchar (200),
    curso varchar(50),
	vaga varchar (30) not null,
	status_pubicacao  varchar (50),
    
    CONSTRAINT IdPublicacao PRIMARY KEY (Autor)
);

Create table Item_publicacao (
	Id_aluno integer,
    Id_empresa integer,
    Id_autor integer,
    
    constraint Fk_itpublicacao_aluno foreign key (Id_aluno) references Aluno (Id),
    constraint Fk_itpublicacao_empresa foreign key (Id_empresa) references Empresa (Id),
    constraint Fk_itpublicacao_autor foreign key (Id_autor) references Publicacao (Autor)
);

CREATE TABLE Administrador (
	Id integer not null auto_increment,
    CPF varchar (11) not null,
    senha varchar (8) not null,
	nome varchar (50) not null,
	email varchar (50) not null,
	telefone varchar (11),
	endereco varchar (50),
	cargo varchar (50) not null,
    
    CONSTRAINT IdAdmin PRIMARY KEY (Id)
);

CREATE TABLE Empresas (
	Id integer not null auto_increment,
	CNPJ varchar (20) not null,
    senha varchar (8) not null,
	nome varchar (50) not null,
	email varchar (50) not null,
	telefone varchar (30),
	endereco varchar (50) not null,
	area_atuacao varchar (100) not null,
    
    CONSTRAINT PRIMARY KEY (Id)
);

select * from trabalho_es .empresas;