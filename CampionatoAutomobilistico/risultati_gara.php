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
    <title>Inserisci Risultati</title>
    <link rel="stylesheet" href="Styles/myStyle.css">
</head>
<body>
<div class="container">
    <nav><a href="index.php">Torna Indietro</a></nav>
    <form method="POST" action="Elaborazione_Dati/elabora_risultato.php">
        <h1>Risultato Gara</h1>

        <label>Gara:</label>
        <select name="id_gara">
            <?php
            $q = "SELECT * FROM gare";
            $st = $db->prepare($q); $st->execute();
            while($g = $st->fetch()) echo "<option value='".$g->id_gara."'>".$g->nome_circuito.".</option>";
            ?>
        </select>

        <label>Pilota:</label>
        <select name="id_pilota">
            <?php
            $q = "SELECT * FROM piloti";
            $st = $db->prepare($q); $st->execute();
            while($p = $st->fetch()) echo "<option value='".$p->id_pilota."'>".$p->nome." ".$p->cognome."</option>";
            ?>
        </select>

        <label>Posizione:</label>
        <input type="number" name="posizione">

        <label>Punti:</label>
        <input type="number" name="punti">

        <br><br>
        <button type="submit">Salva Risultato</button>
    </form>
</div>
</body>
</html>