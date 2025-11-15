create database if not exists giacomo_redi_biciclette;

use giacomo_redi_biciclette;

CREATE TABLE marche (
    id_marca INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20),
    citta VARCHAR(20)
);

CREATE TABLE esemplari (
    id_prodotto INT AUTO_INCREMENT PRIMARY KEY,
    id_marca INT,
    codice_modello INT NOT NULL,
    nome_modello VARCHAR(20),
    tipo VARCHAR(20),
    colore VARCHAR(20),
    dimensione DECIMAL(5,2),
    FOREIGN KEY (id_marca) REFERENCES marche(id_marca)
);

INSERT INTO marche (nome, citta) VALUES
('Bianchi', 'Waterloo'),
('Specialized', 'Morgan Hill'),
('Colnago', 'Taichung'),
('Cannondale', 'Wilton'),
('Bianchi', 'Milano');

INSERT INTO esemplari (id_marca, codice_modello, nome_modello, tipo, colore, dimensione) 
VALUES(1, 101, 'Marlin 7', 'Campagnolo', 'Rosso', 29.0),
(1, 102, 'Domane AL 2', 'Strada', 'Nero', 54.0),
(2, 201, 'Rockhopper', 'Campagnolo', 'Blu', 27.5),
(2, 202, 'Allez', 'Corsa', 'Bianco', 56.0),
(3, 301, 'Talon 2', 'Tandem', 'Verde', 29.0),
(3, 302, 'Defy Advanced', 'Strada', 'Nero', 55.0),
(4, 401, 'Trail 5', 'Turismo', 'Grigio', 29.0),
(4, 402, 'Synapse', 'Tandem', 'Blu', 54.0),
(5, 501, 'Via Nirone 7', 'Strada', 'Celeste', 55.0),
(5, 502, 'Methanol CV', 'Campagnolo', 'Nero', 29.0);


select *
from marche m
left join esemplari e
on m.id_marca = e.id_marca;
