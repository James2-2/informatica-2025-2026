CREATE TABLE automobili(
targa char(7) PRIMARY KEY,
marca varchar(20),
modello varchar(20),
costo int,
dataImmatricolazione date
);

INSERT INTO automobili(targa,marca,modello,costo,dataImmatricolazione)
VALUES ("AB123CD", "Fiat", "Panda", 5000, "2007-12-10"),
("CG230DM", "BMW", "", 5000, "2007-12-10"),
("SO230LD", "Mercedes", "CLA200", 5000, "2007-12-10"),
("CM234KD", "Ferrari", "Panda", 5000, "2007-12-10"),

SELECT * FROM automobili;

SELECT * FROM automobili WHERE marca = "Fiat";

SELECT * FROM automobili WHERE costo > 10000 ORDER BY costo DESC;

SELECT marca FROM automobili;

truncate automobili;

SELECT DISTINCT marca AS marca_senza_doppioni FROM automobili;

SELECT * FROM automobili WHERE marca LIKE 'F%';

SELECT * FROM automobili WHERE marca LIKE 'F_at';