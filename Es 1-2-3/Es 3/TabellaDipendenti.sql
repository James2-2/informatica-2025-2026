create table dipendenti (
    id_dipendente int auto_increment primary key,
    cognome varchar(50) not null,
    nome varchar(50) not null,
    dataNascita date,
    cap char(5),
    citta varchar(50),
    anzianita int,
    id_reparto int auto_increment
);
