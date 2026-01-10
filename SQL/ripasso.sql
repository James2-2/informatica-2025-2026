CREATE database if not exists giacomo_redi_ripasso
use giacomo_redi_ripasso

-- CRUD

CREATE TABLE produttori (
    Id_produttore INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    paese VARCHAR(30),
    sito_web VARCHAR(150)
);

CREATE TABLE standard_wifi (
    Id_standard INT PRIMARY KEY AUTO_INCREMENT,
    nome_standard VARCHAR(10) NOT NULL,
    banda_supportata VARCHAR(50) NOT NULL,
    velocita_massima INT NOT NULL,
    anno_introduzione date
);

CREATE TABLE access_point (
    id_access_point INT PRIMARY KEY AUTO_INCREMENT,
    modello VARCHAR(50) NOT NULL,
    id_produttore INT NOT NULL,
    id_standard INT NOT NULL,
    porte_ethernet INT,
    anno_produzione date,
    FOREIGN KEY (id_produttore) REFERENCES produttori(Id_produttore),
    FOREIGN KEY (id_standard) REFERENCES standard_wifi(Id_standard)
);

INSERT INTO standard_wifi (nome_standard, banda_supportata, velocita_massima, anno_introduzione)
VALUES ("802.11b", "2.4 GHz", 11, "1999-01-01"),
("802.11g", "2.4 GHz", 54, "2003-01-01"),
("802.11n", "2.4/5 GHz", 600, "2009-01-01");

insert into produttori (nome, paese, sito_web)
values ("Cisco", "Stati Uniti", "https://www.cisco.com"),
("Aruba", "Stati Uniti", "https://arubanetworks.hpe.com"),
("TP-Link", "Cina", "https://www.tp-link.com"),
("Zyxel", "Taiwan", "https://www.zyxel.com"),
("Huawei", "Cina", "https://www.huawei.com");

INSERT INTO access_point (modello, id_produttore, id_standard, porte_ethernet, anno_produzione)
VALUES("Aironet 1100", 3, 1, 1, "2001-03-01"),
("Aironet 1200", 5, 2, 2, "2004-01-01"),
("Aironet 1600", 4, 3, 2, "2012-01-01"),
("Aruba AP-60", 2, 2, 1, "2005-01-01"),
("Aruba AP-105", 2, 3, 2, "2013-01-01"),
("TP-Link TL-WA701ND", 3, 2, 1, "2008-01-01"),
("TP-Link TL-WA901ND", 3, 3, 1, "2011-01-01"),
("Zyxel G-570S", 4, 2, 1, "2006-01-01"),
("Zyxel NWA1123", 4, 3, 2, "2014-01-01"),
("Huawei AP6010DN", 5, 3, 2, "2015-01-01");

drop table produttori;
drop table standard_wifi;
drop table access_point;

truncate TABLE produttori;
truncate table standard_wifi;
truncate table access_point;


select * from produttori;
select * from standard_wifi;
select * from access_point;

select paese from produttori;
select modello from access_point where porte_ethernet > 1;
select * from standard_wifi where velocita_massima > 100;

update access_point set porte_ethernet = 2 WHERE id_access_point = 1;

delete from access_point where id_access_point = 5;


-- JOIN (right join, left join, inner join, full join)

select *
from access_point ap
inner join standard_wifi sw 
on ap.id_standard  = sw.Id_standard
inner join produttori p 
on ap.id_produttore = p.Id_produttore;

select p.nome, ap.modello, sw.nome_standard   
from access_point ap
join standard_wifi sw 
on ap.id_standard  = sw.Id_standard
join produttori p 
on ap.id_produttore = p.Id_produttore;

select *
FROM produttori p
left join access_point ap 
on p.Id_produttore = ap.id_produttore;

select *
FROM access_point ap
right join produttori p 
on ap.id_produttore = p.Id_produttore;

select p.nome, ap.modello  
from access_point ap
left join produttori p 
on ap.id_produttore = p.Id_produttore
union 
select p.nome, ap.modello  
from access_point ap
right join produttori p 
on ap.id_produttore = p.Id_produttore;


-- OPERATORI AGGREGATI
select count(*) from access_point;

select count(modello) as numeroModelli from access_point;

select sum(porte_ethernet) as numeroPorteEthernet from access_point;

select avg(velocita_massima) as mediaVelocitaMassima from standard_wifi;

select min(velocita_massima) as velocitaMinima FROM standard_wifi;

select max(velocita_massima) as velocitaMassima from standard_wifi;

select p.nome as produttore, count(a.id_access_point) as numero_access_point
from produttori p
join access_point a 
on p.Id_produttore = a.id_produttore
group by produttore
having numero_access_point > 2;
