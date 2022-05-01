CREATE TABLE users(
    ID INT NOT NULL UNIQUE,
    name CHARACTER VARYING,
    email CHARACTER VARYING UNIQUE,
    remember_token CHARACTER VARYING,
    PRIMARY KEY(ID)

);

create table Casa(
    casaId INT NOT NULL,
    casaNome CHARACTER VARYING(40),
    Divisoes TEXT,
    imagens TEXT,
    localizacao TEXT,
    PRIMARY KEY (casaId),
    criadorID INTEGER REFERENCES users (ID),
    estado INT NOT NULL,
    dataCriada TIMESTAMP (3),
    Contacto INT,
    Preco money
);