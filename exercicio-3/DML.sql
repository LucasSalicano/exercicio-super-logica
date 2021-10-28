CREATE DATABASE exercicio3;
USE exercicio3;

CREATE TABLE IF NOT EXISTS usuario (
  id INT NOT NULL AUTO_INCREMENT,
  cpf VARCHAR(11) NOT NULL UNIQUE,
  nome VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS info (
  id INT NOT NULL AUTO_INCREMENT,
  cpf VARCHAR(11) NOT NULL,
  genero ENUM('M', 'F') NOT NULL,
  ano_nascimento INT NOT NULL,
  PRIMARY KEY (id),
  INDEX `fk_cpf_usuario_idx` (cpf ASC),
  CONSTRAINT `fk_cpf_usuario`
    FOREIGN KEY (`cpf`)
    REFERENCES `exercicio3`.`usuario` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    );

INSERT INTO usuario (cpf, nome) VALUES 
('70156395053','João'),
('28543877083','Maria'),
('48909140054','Julia'),
('61162421037','Clara'),
('20399346007','Miguel'),
('60966175069','Pedro');

INSERT INTO info (cpf, genero, ano_nascimento) VALUES
('70156395053','M', 1968),
('28543877083','F', 1975),
('48909140054','F', 1986),
('61162421037','F', 1961),
('20399346007','M', 1996),
('60966175069','M', 1966);

#SELECT * FROM usuario;
#SELECT * FROM info;

SELECT CONCAT(usuario.nome, " - ", info.genero) AS usuario, IF((YEAR(now()) - info.ano_nascimento) > 50, "SIM", "NÃO") AS maior_50_anos FROM usuario inner join info on (info.cpf = usuario.cpf);


