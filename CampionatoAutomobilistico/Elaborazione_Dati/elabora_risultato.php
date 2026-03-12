<?php

$dbconfig = require "Configuration/dbConfiguration.php";
require "Configuration/databaseConnection.php";
$db = databaseConnection::getDB($dbconfig);

if(!isset($db)) {
    exit("Errore nel database");
}

$q = "INSERT INTO risultati (id_gara, id_pilota, posizione, punti) VALUES (:ig, :ip, :ps, :pt)";
try {
    $s = $db->prepare($q);
    $s->execute([':ig'=>$_POST['id_gara'], ':ip'=>$_POST['id_pilota'], ':ps'=>$_POST['posizione'], ':pt'=>$_POST['punti']]);
    header("Location: visualizza.php");
} catch(PDOException $e) {
    echo "Errore";
}
?>