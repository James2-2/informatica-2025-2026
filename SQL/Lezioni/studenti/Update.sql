alter table Studenti add dipartimento varchar(50); -- Aggiunge la colonna dipartimento

alter table Studenti drop column dipartimento; -- Toglie la colonna dipartimento

alter table Studenti change column cognome cognome char(20) not null after Id_studente; -- la colonna cognome si sposta dopo id studente e diventa char not null

alter table Studenti change column cognome cognome char(20) not null first; -- cognome diventa la prima colonna della tabella
