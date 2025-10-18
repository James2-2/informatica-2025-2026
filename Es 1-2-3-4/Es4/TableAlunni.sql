create table alunni(
	codice int primary key,
	cf char(16) not null,
	cognome varchar(40),
	nome varchar(40),
	data date,
	classe int
);