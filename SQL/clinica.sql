CREATE database IF NOT EXISTS clinica;

use clinica;

create table pazienti (
Id_paziente int primary key auto_increment,
cognome varchar(30) not null,
nome varchar(30) not null,
data_nascita date,
provincia char(2),
codice_Asl varchar(10)
);

create table visite (
Id_visita int primary key auto_increment,
data_visita date,
peso decimal(5,2),
pressione_min int,
pressione_max int,
glicemia decimal(5,2),
id_paziente int,
foreign key(id_paziente) references pazienti (Id_paziente)
);

insert into visite(data_visita, peso, pressione_min, pressione_max, glicemia, id_paziente)
values ("2025-02-02", 23)