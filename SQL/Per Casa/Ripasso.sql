create database if not exists clinica;
use clinica;

create table pazienti(
Id_paziente int primary key auto_increment,
nome varchar(20) not null,
cognome varchar(20) not null,
anno_nascita date,
provincia varchar(20),
codice varchar(20),
eta int 
);


insert into pazienti(cognome, nome, anno_nascita, provincia, codice, eta)
values ('Bianchi', 'Luca', '1985-04-10', 'Milano', 'ASL-MI01', 20),
('Rossi', 'Marco', '1990-07-23', 'Napoli', null, 30),
('Rossi', 'Marco', '1990-07-23', 'Napoli', null, 60),
('Rossi', 'Marco', '1990-07-23', 'Napoli', null, 50),
('Verdi', 'Anna', '1980-12-01', 'Roma', 'ASL-RM05', 98),
('Neri', 'Giulia', '2000-02-14', 'Milano', 'ASL-MI03', 104),
('Esposito', 'Francesco', '1983-09-19', 'Napoli', 'ASL-NA07', 403),
('Conti', 'Marta', '1995-05-30', 'Roma', null, 69);

select nome, cognome, avg(eta) as mediaEta
from pazienti
group by nome, cognome;

select * from pazienti where provincia like 'N%';

select * from pazienti where codice is not null;

select * from pazienti;

select count(*)
from pazienti
where provincia = 'Napoli';

select count(distinct cognome) from pazienti;

select count(*) from pazienti where cognome = 'Rossi';

alter table pazienti add marchetto int;
alter table pazienti drop column marchetto;

truncate pazienti;

select * from pazienti where nome = 'Bianchi';
select nome, cognome from pazienti;
drop table pazienti;
drop table visite;

select nome, cognome, avg(eta) as mediaEta
from pazienti
group by nome, cognome
having mediaeta > 40;

select cognome from pazienti where cognome like 'r%';


select * from pazienti;
SELECT * FROM pazienti where nome = 'Bianchi'; -- selezione
select nome, cognome from pazienti; -- proiezione
select count(*) from pazienti;


select nome, cognome, anno_nascita from pazienti where anno_nascita < '1990-01-01';

select * from pazienti where provincia = 'Roma' and codice IS NULL;

select provincia, count(*) as sommaProvincia
from pazienti
group by provincia
order by sommaProvincia desc;

update pazienti 
set codice = 'ASL-NA01' 
where nome = 'Marco' and cognome = 'Rossi';

select * from pazienti where codice is null order by provincia asc;

select * from pazienti where anno_nascita between '1980-01-01' and '1989-12-31';

alter table pazienti add email varchar(50);

update pazienti set email = 'luca.ciao@gmail.com';

delete from pazienti where codice is null;

select provincia, count(*) as nPazienti
from pazienti
group by provincia
order by nPazienti desc;
 	
select provincia, count(*) as nPazienti
from pazienti
group by provincia
having nPazienti > 1;
s
