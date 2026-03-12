<?php

$dbconfig = require "Configuration/dbConfiguration.php";
require "Configuration/databaseConnection.php";
$db = databaseConnection::getDB($dbconfig);

if(!isset($db)) {
    exit("Errore nel database");
}
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Classifiche</title>
    <link rel="stylesheet" href="Styles/myStyle.css">
</head>
<body>
<div class="container">
    <nav><a href="index.php">Torna alle Iscrizioni</a></nav>

    <h1>Classifica Piloti</h1>
    <?php
    $query = "SELECT p.nome, p.cognome, SUM(r.punti) as totale 
              FROM piloti p JOIN risultati r ON p.id_pilota = r.id_pilota 
              GROUP BY p.id_pilota ORDER BY totale DESC";
    $stmt = $db->prepare($query); $stmt->execute();
    while($u = $stmt->fetch()) echo $u->nome." ".$u->cognome." - <b>".$u->totale." pts</b><hr>";
    ?>

    <h1>Classifica Squadre</h1>
    <?php
    $query = "SELECT c.nome, SUM(r.punti) as tot 
              FROM case_automobilistiche c JOIN piloti p ON c.id_casa = p.id_casa
              JOIN risultati r ON p.id_pilota = r.id_pilota
              GROUP BY c.id_casa ORDER BY tot DESC";
    $stmt = $db->prepare($query); $stmt->execute();
    while($s = $stmt->fetch()) echo $s->nome." - <b>".$s->tot." pts</b><hr>";
    ?>
</div>
</body>
</html>