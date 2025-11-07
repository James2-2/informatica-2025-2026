create table voti(
	id int primary key auto_increment,
	cognome varchar(20) not null,
	nome varchar(20) not null,
	materia varchar(20) not null,
	voto decimal (2,1) not null
);

INSERT INTO voti(cognome, nome, materia, voto)
VALUES('Marchetto', 'Francesco', 'Matematica', 10),
('Visentini', 'Nicolò', 'Informatica',7),
('Poli','Alessio','Sistemi', 6),
('Gianesella','Riccardo','Matematica',4,5),
('Marchetto', 'Francesco', 'Matematica', 2),
('Poli','Alessio','Informatica', 9),
('Gianesella','Riccardo','Storia',4),
('Visentini', 'Nicolò', 'Italiano',9),
('Poli','Alessio','Religione', 0),
('Gianesella','Riccardo','Italiano',8),
('Poli','Alessio','Tpsit', ),
('Visentini', 'Nicolò', 'Gpoi',6),
('Gianesella','Riccardo','Gpoi',5,5),
('Marchetto', 'Francesco', 'Storia', 1),
('Marchetto', 'Francesco', 'Italiano', 7);


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