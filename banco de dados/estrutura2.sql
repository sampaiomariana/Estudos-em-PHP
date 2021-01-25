create DATABASE acesso;

use acesso;

create TABLE clientes (
    id  SERIAL PRIMARY KEY,
    nome    VARCHAR(255),
    cargo   INTEGER

);