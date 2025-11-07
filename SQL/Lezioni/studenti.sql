create table Studenti(
	Id_studente int auto_increment primary key, -- incrementa di 1 (auto_increment), auto_increment e primary key sono dei vincoli
	Nome varchar(50),
	Cognome varchar(50), -- Si ridimensiona in base a quanto inserisco; char invece è fisso
	DataNascita date,
	Corso varchar(20),
	Voto decimal(4,2) -- 4 cifre totali, 2 riservate ai decimali
);

insert into Studenti(Nome, Cognome, DataNascita, Corso, Voto) -- Autoincrement mette l'id in automatico quindi non serve inserirlo
values ('Giuseppe', 'Bianchi', '2000-03-01', 'Informatica', 28),
('Giovanni', 'Rossi', '2002-04-01', 'Elettronica', 25);

drop table Studenti;


select * from Studenti; -- visualizza gli attributi della tabella
select Nome, Cognome from Studenti;
select Nome, Cognome from Studenti where Voto > 27; -- visualizza il nome e cognome solo di chi ha il voto maggiore di 27

select Nome, Cognome from Studenti where Voto between 28 and 29; -- visualizza il nome e cognome solo di chi ha il voto tra 28 e 29
-- select Nome, Cognome from Studenti where Voto>= 28 and Voto <= 29;

select Nome, Cognome from Studenti where Voto <= 20 or Voto >= 27; -- visualizza il nome e cognome di chi ha un voto minore uguale a 20 oppure maggiore uguale a 27

select * from Studenti where Corso in ('Informatica', 'Sistemi');
-- select * from Studenti where Corso like 'Informatica'; 
-- select * from Studenti where Corso = 'Informatica'; 
-- select * from studenti where Corso = 'Informatica' or Corso = 'Sistemi';

-- CARATTERI JOLLY
select * from Studenti where Corso like 'I%'; -- mostra tutti gli attributi che contengono una I all'inizio. Il % è come &
select * from Studenti where Corso like 'I__________'; -- un trattino corrisponde un carattere, Informatica inizia con I ed è lunga 10 caratteri

select count(*) from Studenti; -- Conta gli studenti all'interno della tabella


alter table Studenti add dipartimento varchar(50); -- Aggiunge la colonna dipartimento

alter table Studenti drop column dipartimento; -- Toglie la colonna dipartimento

alter table Studenti change column cognome cognome char(20) not null after Id_studente; -- la colonna cognome si sposta dopo id studente e diventa char not null

alter table Studenti change column cognome cognome char(20) not null first; -- cognome diventa la prima colonna della tabella


delete from Studenti where Id_studente = 1; -- Cancella la riga che ha id studente uguale a 1

delete from Studenti where cognome = 'Bianchi' and nome = 'Aldo'; -- Cancella chi ha quel nome e cognome

truncate table Studenti; -- Cancella tutti i dati ma non la struttura

update Studenti set voto = 8 where Id_studente = 1;

update Studenti set nome = 'Orazio' where Id_studente = 1;

update Studenti set nome = 'Giovanni' where cognome = 'Rossi';

update Studenti set nome = 'Marco' where nome = 'Giovanni';


select count (nome) -- così non conta i NULL
from studenti; 

select count (distinct nome) -- così non conta i duplicati che hanno lo stesso nome
from studenti;

select count (nome) 
from studenti 
WHERE nome = 'Andrea';

select sum(voto) as sommaVoti 
from studenti;

SELECT sum(voto) AS sommaVoti 
FROM studenti 
WHERE nome = 'A%'; -- somma i voti di chi ha il nome che inizia per A

SELECT sum(voto) AS sommaVoti, 
count (nome) AS totale 
FROM studenti;

SELECT sum(DISTINCT voto) AS sommaVoti, 
count (DISTINCT voto) AS totale 
FROM studenti;

SELECT avg(voto) AS mediaClasse 
from studenti; -- Average, fa la media

SELECT avg(voto) as mediaVotiAndrea 
FROM studenti 
WHERE nome LIKE 'Andrea';

SELECT min(voto) AS votoMinimo 
FROM studenti;

SELECT max(voto) AS votoMassimo 
FROM studenti;