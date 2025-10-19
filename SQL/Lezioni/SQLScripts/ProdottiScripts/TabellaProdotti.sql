create table prodotti (
    codiceProdotto varchar(10) primary key,
    numeroSeriale int unique,
    nome varchar(50) not null,
    prezzo decimal(4,2) check (prezzo > 0),
    disponibile boolean default true,
    prodottiAcquistati int auto_increment
);