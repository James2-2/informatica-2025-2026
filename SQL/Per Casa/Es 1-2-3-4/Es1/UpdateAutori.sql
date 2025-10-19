alter table autori change cf codice_fiscale;

alter table autori add indirizzo varchar(40);

alter table autori add cap char(5);

alter table autori modify nome varchar(50) not null;
alter table autori modify cognome varchar(50) not null