-- Funzioni di aggregazione
select COUNT (*) as totaleClienti from mock_data -- Conta le persone e rinonima il campo in totale clienti
-- conta anche i NULL

select count (nome) from studenti; -- così non conta i NULL
select count (distinct nome) from studenti; -- così non conta i duplicati che hanno lo stesso nome
select count (nome) from studenti WHERE nome = 'Andrea';

select sum(voto) as sommaVoti from studenti;
SELECT sum(voto) AS sommaVoti FROM studenti WHERE nome = 'A%'; -- somma i voti di chi ha il nome che inizia per A

SELECT sum(voto) AS sommaVoti, count (nome) AS totale FROM studenti;
SELECT sum(DISTINCT voto) AS sommaVoti, count (DISTINCT voto) AS totale FROM studenti;

SELECT avg(voto) AS mediaClasse 
from studenti; -- Average, fa la media

SELECT avg(voto) as mediaVotiAndrea 
FROM studenti WHERE nome LIKE 'Andrea';

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