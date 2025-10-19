alter table docenti change abilitazione classe_concorso varchar(40);

alter table docenti change cf codice_fiscale char(16);

alter table docenti add column ruolo bool;

alter table docenti modify classe_concorso varchar(40) not null;