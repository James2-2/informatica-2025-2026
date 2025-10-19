create table docenti(
	codice int primary key,
	cf char(16) not null,
	cognome varchar(40),
	nome varchar(40),
	abilitazione varchar(40)
);