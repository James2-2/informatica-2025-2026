delete from Studenti where Id_studente = 1; -- Cancella la riga che ha id studente uguale a 1

delete from Studenti where cognome = 'Bianchi' and nome = 'Aldo'; -- Cancella chi ha quel nome e cognome

truncate table Studenti; -- Cancella tutti i dati ma non la struttura

update Studenti set voto = 8 where Id_studente = 1;

update Studenti set nome = 'Orazio' where Id_studente = 1;

update Studenti set nome = 'Giovanni' where cognome = 'Rossi';

update Studenti set nome = 'Marco' where nome = 'Giovanni';