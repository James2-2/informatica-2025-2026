<?php
return [
    "dsn" => "mysql:host=192.168.60.144;dbname=giacomo_redi_campionato;charset=utf8mb4",
    "username" => "giacomo_redi",
    "password" => "strariperebbero.dassistenza.",
    "options" => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
];