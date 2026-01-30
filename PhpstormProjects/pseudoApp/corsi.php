<?php
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Attivazione corsi</title>
</head>
<body>

<h1>Attivazione corsi</h1>

<form action="docenti.php" method="post">
    <label>Numero di corsi da attivare (1–10):</label>
    <br>
    <br>
    <input type="number" name="numCorsi" min="1" max="10" required>
    <br>
    <br>
    <input type="submit" value="Invia">
</form>

</body>
</html>