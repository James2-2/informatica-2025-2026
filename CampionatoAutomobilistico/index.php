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
    <title>Gestione Campionato</title>
    <link rel="stylesheet" href="Styles/myStyle.css">
</head>
<body>
<div class="container">
    <nav>
        <a href="index.php">Iscrizioni</a>
        <a href="risultati_gara.php">Inserisci Risultati</a>
        <a href="visualizza.php">Classifiche</a>
    </nav>

    <form method="POST" action="Elaborazione_Dati/elabora_casa.php">
        <h1>Registrazione Scuderia</h1>
        <label for="nome_casa">Nome Scuderia: </label>
        <input id="nome_casa" type="text" name="nome_casa">
        <br>
        <label for="colore">Colore Livrea: </label>
        <input id="colore" type="text" name="colore_livrea">
        <br><br>
        <button type="submit">Registra Casa</button>
    </form>

    <hr>

    <form method="POST" action="Elaborazione_Dati/elabora_pilota.php">
        <h1>Iscrizione Pilota</h1>
        <label for="nome">Nome: </label>
        <input id="nome" type="text" name="nome">
        <br>
        <label for="cognome">Cognome: </label>
        <input id="cognome" type="text" name="cognome">
        <br>
        <label for="naz">Nazionalità: </label>
        <input id="naz" type="text" name="nazionalita">
        <br>
        <label for="numero">Numero: </label>
        <input id="numero" type="number" name="numero">
        <br>
        <label for="id_casa">Scuderia:</label>
        <select name="id_casa" id="id_casa">
            <option value="">Seleziona</option>
            <?php
            $q = "SELECT * FROM case_automobilistiche";
            $st = $db->prepare($q); $st->execute();
            while($c = $st->fetch()) echo "<option value='".$c->id_casa."'>".$c->nome."</option>";
            ?>
        </select>
        <br><br>
        <button type="submit">Invia Iscrizione</button>
    </form>

    <hr>

    <form method="POST" action="Elaborazione_Dati/elabora_gara.php">
        <h1>Nuova Gara</h1>
        <label for="nome_g">Nome Gara: </label>
        <input id="nome_g" type="text" name="nome_gara">
        <br>
        <label for="circ">Circuito: </label>
        <input id="circ" type="text" name="nome_circuito">
        <br>
        <label for="data">Data: </label>
        <input id="data" type="date" name="data_gara">
        <br><br>
        <button type="submit">Crea Gara</button>
    </form>

</div>
</body>
</html>