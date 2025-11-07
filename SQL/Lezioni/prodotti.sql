create table prodotti (
    codiceProdotto varchar(10) primary key,
    numeroSeriale int unique,
    nome varchar(50) not null,
    prezzo decimal(4,2) check (prezzo > 0),
    disponibile boolean default true,
    prodottiAcquistati int auto_increment
);

insert into prodotti(codiceProdotto, numeroSeriale, nome, prezzo, disponibile, prodottiAcquistati)
values ('as234', 20, 'Mela', 4,50, false, 0),
('fd43tfas', 10, 'Pera', 0);

drop table prodotti;