create table autori(
	codice int auto_increment primary key,
	cf varchar(16) not null,
	cognome varchar(20),
	nome varchar(20),
	citta varchar(20)
);