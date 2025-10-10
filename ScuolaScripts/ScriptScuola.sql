create table studenti(
Id_studente int auto_increment primary key, -- incrementa di 1 (auto_increment)
Nome varchar(50),
Cognome varchar(50), -- Si ridimensiona in base a quanto inserisco; char invece è fisso
DataNascita date,
Corso varchar(20),
Voto decimal(4,2) -- 4 cifre totali, 2 riservate ai decimali
);