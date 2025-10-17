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