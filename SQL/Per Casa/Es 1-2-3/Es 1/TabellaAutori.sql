create table autori (
    codice int auto_increment primary key,
    cf varchar(16) not null unique,
    cognome varchar(50) not null,
    nome varchar(50) not null,
    citta varchar(50)
);

insert into autori (cf, cognome, nome, citta)
values ('09DE23JNDT3Y45DE', 'Machiavelli', 'Nicolò', 'Firenze'),
('SDSAD12232341234', 'Carducci', 'Giosuè', 'Bologna');
