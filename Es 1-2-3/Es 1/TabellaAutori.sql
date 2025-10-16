create table autori (
    codice int auto_increment primary key,
    cf varchar(16) not null unique,
    cognome varchar(50) not null,
    nome varchar(50) not null,
    citta varchar(50)
);
