create table reparti (
    id_reparto int auto_increment primary key,
    nome_reparto varchar(50) not null,
    cod_responsabile int unique
);
