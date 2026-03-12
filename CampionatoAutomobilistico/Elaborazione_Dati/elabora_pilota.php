<?php

$dbconfig = require "Configuration/dbConfiguration.php";
require "Configuration/databaseConnection.php";
$db = databaseConnection::getDB($dbconfig);

if(!isset($db)) {
    exit("Errore nel database");
}

$q = "INSERT INTO piloti (nome, cognome, nazionalita, numero, id_casa) VALUES (:n, :c, :nz, :num, :id)";
try {
    $s = $db->prepare($q);
    $s->execute([':n'=>$_POST['nome'], ':c'=>$_POST['cognome'], ':nz'=>$_POST['nazionalita'],
        ':num'=>$_POST['numero'], ':id'=>$_POST['id_casa']]);
    header("Location: index.php");
} catch(PDOException $e)
{
    echo "Errore";
}
?>