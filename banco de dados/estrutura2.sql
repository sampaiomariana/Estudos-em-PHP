create DATABASE acesso;

use acesso;


create table cargos(

    id  SERIAL PRIMARY KEY,
    nome_cargo  VARCHAR(255)
);

create TABLE clientes (
    id  SERIAL PRIMARY KEY,
    nome    VARCHAR(255),
    cargo   INTEGER REFERENCES cargos(id);

);
