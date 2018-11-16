CREATE DATABASE blog;

CREATE TABLE postagem(
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100),
    conteudo TEXT,
    PRIMARY KEY(id)
);