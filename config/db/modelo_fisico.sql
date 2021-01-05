CREATE DATABASE day_quests;

USE day_quests;

CREATE TABLE usuario(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  idade INT NOT NULL,
  nomeUsuario VARCHAR(100) NOT NULL,
  senha VARCHAR(128) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE quests(
	id INT NOT NULL AUTO_INCREMENT,
    id_usuario INT NOT NULL,
	titulo VARCHAR(150) NOT NULL,
	tarefa VARCHAR(500),
	FOREIGN KEY (id_usuario) REFERENCES usuario(id),
	PRIMARY KEY (id)
);

CREATE TABLE diario(
	id INT NOT NULL AUTO_INCREMENT,
    id_usuario INT NOT NULL,
	titulo VARCHAR(150),
	descricao VARCHAR(1000),
	diarioData DATE NOT NULL,
	FOREIGN KEY (id_usuario) REFERENCES usuario(id),
	PRIMARY KEY (id)
);