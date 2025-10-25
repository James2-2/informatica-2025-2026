-- Funzioni di aggregazione
select COUNT (*) as totaleClienti -- Conta le persone e rinonima il campo in totale clienti e conta anche i NULL
from mock_data 

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

SELECT cognome,nome, avg(voto) AS mediaVoti 
FROM voti
GROUP BY cognome, nome; -- in base al cognome e al nome fa la media di tutti i voti

SELECT cognome, nome, materia avg(voto) AS mediaVoti
FROM voti 
GROUP BY cognome, nome, materia;

SELECT cognome, nome, materia avg(voto) AS mediaVoti
FROM voti 
GROUP BY cognome, nome, materia
having avg(voto) > 6;

alter table voti add numInterrogazioni int;

update voti
set numInterrogazioni = 3;

SELECT cognome, nome, materia avg(voto) AS mediaVoti, sum(numInterrogazioni) as numero_interrogazioni
FROM voti 
GROUP BY cognome, nome, materia
having mediaVoti > 6 and numero_interrogazioni > 3; -- Si possono usare gli alias

SELECT cognome, nome, materia, AVG(voto) AS mediaVoti
FROM voti
WHERE voto >= 6
GROUP BY cognome, nome, materia
HAVING mediaVoti > 7; -- having lavora sulle funzioni di aggregazione dopo group by, where lavora sulle tuple, sulle tabelle

select voto
from voti
where materia = 'Informatica' and nome = 'Andrea';

update voti
set voto = 5
where materia = 'Informatica' and nome = 'Andrea';