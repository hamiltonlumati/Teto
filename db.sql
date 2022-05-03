CREATE TABLE users(
    id BIGSERIAL NOT NULL UNIQUE ,
    name CHARACTER VARYING,
    email CHARACTER VARYING NOT NULL UNIQUE,
    remember_token CHARACTER VARYING,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    email_verified_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    password VARCHAR NOT NULL,
    PRIMARY KEY(ID)
);

create table casas(
    casaId BIGSERIAL NOT NULL UNIQUE,
    casaNome CHARACTER VARYING(40),
    Divisoes TEXT,
    imagens TEXT,
    localizacao TEXT,
    PRIMARY KEY (casaId),
    criadorID BIGINT REFERENCES users (ID),
    estado INT NOT NULL,
    dataCriada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Contacto INT,
    Preco money
);



