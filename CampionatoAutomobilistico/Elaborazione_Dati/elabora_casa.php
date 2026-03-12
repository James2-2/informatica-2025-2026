<?php

$dbconfig = require "Configuration/dbConfiguration.php";
require "Configuration/databaseConnection.php";
$db = databaseConnection::getDB($dbconfig);

if(!isset($db)) {
    exit("Errore nel database");
}

$q = "INSERT INTO case_automobilistiche (nome, colore_livrea) VALUES (:n, :c)";
try {
    $s = $db->prepare($q);
    $s->execute([':n'=>$_POST['nome_casa'], ':c'=>$_POST['colore_livrea']]);
    header("Location: index.php");
} catch(PDOException $e) {
    echo "Errore";
}
?>