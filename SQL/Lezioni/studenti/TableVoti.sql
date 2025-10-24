create table Voti(
	id int primary key auto_increment,
	cognome varchar(20) not null,
	nome varchar(20) not null,
	materia varchar(20) not null,
	voto decimal (2,1) not null
);