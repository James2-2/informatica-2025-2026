<?php
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Registrazione Utenti | Biblioteca comunale</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Registrazione utenti</h1>
    <form action="riepilogo.php" method="post">
        <label for="nome">Nome:</label>
        <input id="nome" type="text" name="nome" required>

        <label for="cognome">Cognome:</label>
        <input id="cognome" type="text" name="cognome" required>

        <label for="tessera">Numero Tessera:</label>
        <input id="tessera" type="number" name="tessera" required>

        <label for="data_iscrizione">Data di iscrizione:</label>
        <input id="data_iscrizione" type="date" name="data_iscrizione" required>

        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required>

        <button type="submit">Invia</button>
    </form>
    <br>
    <a class="button" href="index.php">Torna alla home</a>
</div>
</body>
</html>