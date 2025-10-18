create table libri(
	isbn int primary key not null,
	titolo varchar(50),
	autore varchar(50),
	argomento varchar(50),
	editore varchar(50),
	anno int,
	edizione int
);