CREATE DATABASE IF NOT EXISTS db_academy;

USE db_academy;

# TABLE users
CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(45) NOT NULL,
	password VARCHAR(64) NOT NULL,
	CONSTRAINT pk_users	PRIMARY KEY(id)
);

# TABLE disciplinas
CREATE TABLE disciplinas(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(80) NOT NULL,
	CONSTRAINT pk_disciplinas	PRIMARY KEY(id)
);

# TABLE alunos
CREATE TABLE alunos(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(80) NOT NULL,
	matricula VARCHAR(45) NOT NULL,
	disciplina_id INT NOT NULL,
	n1 DECIMAL(10,2) NOT NULL,
	n2 DECIMAL(10,2) NOT NULL,
	n3 DECIMAL(10,2) NOT NULL,
	CONSTRAINT pk_users	PRIMARY KEY(id),
	CONSTRAINT fk_disciplinas FOREIGN KEY (disciplina_id)	REFERENCES disciplinas (id)
);

# usuario: admin | senha: admin
INSERT INTO users(username, password) VALUES ('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

# Disciplinas pre cadastradas
INSERT INTO disciplinas(nome) VALUES('Fundamentos do PHP OO');
INSERT INTO disciplinas(nome) VALUES('PHP Frameworks - Laravel');
INSERT INTO disciplinas(nome) VALUES('PHP Frameworks - Symphony');
