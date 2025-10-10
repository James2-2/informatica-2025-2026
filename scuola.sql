create table Studenti( Id_studente int not null auto_increment primary key, 
Nome varchar(50) //Si ridimensiona in base a quanto inserisco, char invece è fisso, 
Cognome varchar(50), 
DataNascita date, 
Corso varchar(20), 
Voto decimal(4,2) //4 cifre totali, 2 riservate ai decimali 
);
