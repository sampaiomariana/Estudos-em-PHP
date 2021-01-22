CREATE DATABASE cadastro
use cadastro;

create table cliente {
    cliente_id      SERIAL PRIMARY KEY, 
    nome            VARCHAR(255),
    sobrenome       VARCHAR(255),
    cidade          VARCHAR(255),
    cadastro_date   TIMESTAMP

}