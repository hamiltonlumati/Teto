create table Casa(
    casaId INT NOT NULL,
    casaNome CHARACTER VARYING(40),
    Divisoes TEXT,
    imagens TEXT,
    localizacao TEXT,
    PRIMARY KEY (casaId),
    criadorID INTEGER REFERENCES users (id),
    estado INT NOT NULL,
    dataCriada TIMESTAMP (3),
    Contacto INT,
    Preco money
)