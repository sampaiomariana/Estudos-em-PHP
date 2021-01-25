CREATE DATABASE cadastro

use cadastro;

create table cliente (
    cliente_id      SERIAL PRIMARY KEY, 
    nome            VARCHAR(255),
    sobrenome       VARCHAR(255),
    cidade          VARCHAR(255),
    cadastro_date   TIMESTAMP
);


create table categoria (

    id SERIAL PRIMARY KEY,
    categoria   VARCHAR(255)
);

create table post (
    id              SERIAL PRIMARY KEY,
    titulo          VARCHAR(255),
    categoria_id    INTEGER REFERENCES categoria(id),
    conteudo        TEXT
);
