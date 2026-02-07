<?php
//Separazione degli ambiti
// Costruttore con 3 stringhe e 1 array associativo come parametri
return [
    "dsn" => "mysql:host=192.168.60.144;dbname=giacomo_redi_itis;charset=utf8mb4",
    "username" => "giacomo_redi",
    "password" => "strariperebbero.dassistenza.",
    "options" => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // PHP Data Object, una tupla diventa un oggetto
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gli errori di sql vengono gestiti come eccezioni
    ]
];