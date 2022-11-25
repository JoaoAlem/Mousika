create database mousika;
use mousika;

-- tabela de um usuario
create table usuario(
	id_usuario int not null auto_increment,
	nome varchar(30) not null,
	sobrenome varchar(30) not null,
	email varchar(100) not null unique,
	senha varchar(60) not null,
	tipo varchar(13) not null default 'user',
	primary key (id_usuario)
);

-- tabela de posts dos usuarios
create table musicas(
	id_musica int not null auto_increment,
	nome_musica varchar(60) not null,
	nome_autor varchar(60) not null,
	dificuldade ENUM('Fácil', 'Médio', 'Difícil', 'Expert') not null,
	instrumento varchar(20) not null,
	data_publicacao date null,
	id_usuario int not null,
	imagem varchar(100) not null,
	arquivo varchar(100) not null,
	primary key (id_musica),
	foreign key (id_usuario) references usuario (id_usuario)
);

-- tabela de posts favoritados
create table favoritar(
	id_usuario int not null,
	id_musica int not null,
	primary key(id_usuario, id_musica),
	foreign key (id_usuario) references usuario (id_usuario),
	foreign key (id_musica) references musicas (id_musica)
);

DELIMITER $

CREATE TRIGGER tgr_dataPub_musicas BEFORE INSERT ON musicas
FOR EACH ROW
BEGIN
	SET NEW.data_publicacao = NOW();
END$

DELIMITER ;

-- Selects usados para visualizar resultados
select * from favoritar f ;

SELECT m.nome_musica, m.id_musica, m.nome_musica, m.nome_autor, m.imagem, m.instrumento, m.dificuldade FROM musicas m INNER JOIN usuario u on m.id_usuario = u.id_usuario WHERE m.id_usuario = 1;
SELECT m.nome_musica, m.nome_musica, m.nome_autor, m.imagem, m.instrumento, m.dificuldade  FROM favoritar f INNER JOIN musicas m on f.id_musica = m.id_musica WHERE f.id_usuario = 1;

select count(*) from usuario;

delete from favoritar;

-- Drops para facilitar na mudança de tabelas, como é um banco teste não precisa de alter
drop table usuario;
drop table musicas;
drop table favoritar;