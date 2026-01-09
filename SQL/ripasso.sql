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
    nome_standard VARCHAR(10) NOT NULL,     -- es: 802.11n, 802.11ac
    banda_supportata VARCHAR(50) NOT NULL,  -- es: 2.4 GHz, 5 GHz, 2.4/5 GHz
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
VALUES("Aironet 1100", 1, 1, 1, "2001-03-01"),
("Aironet 1200", 1, 2, 2, "2004-01-01"),
("Aironet 1600", 1, 3, 2, "2012-01-01"),
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


-- OPERATORI AGGREGATI
