<?php

$dbconfig = require "Configuration/dbConfiguration.php";
require "Configuration/databaseConnection.php";
$db = databaseConnection::getDB($dbconfig);

if(!isset($db)) {
    exit("Errore nel database");
}

$query = "INSERT INTO gare (nome_gara, nome_circuito, data_gara) 
          VALUES (:ng, :nc, :d)";

try {
    $stmt = $db->prepare($query);
    $stmt->execute([
        ':ng' => $_POST['nome_gara'],
        ':nc' => $_POST['nome_circuito'],
        ':d'  => $_POST['data_gara']
    ]);
    header("Location: index.php");
} catch(PDOException $e){
    echo "Errore nel database";
}
?>