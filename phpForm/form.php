<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="elabora.php"> <!--Il metodo è post o get, di default mette get-->
    <!--Action: dopo aver inviato il form va a prendere l'altro file che gestisce i dati del form-->

    <h1>Informazioni</h1>
    <label for="nome">Nome: </label>
    <input id="nome" type="text" name="nome">
    <br>
    <label for="cognome">Cognome: </label>
    <input id="cognome" type="text" name="cognome">
    <br>
    <label for="email">Email: </label>
    <input id="email" type="email" name="email">
    <br>
    <label for="password">Password: </label>
    <input id="password" type="password" name="password">
    <br>
    <label for="eta">Età: </label>
    <input id="eta" type="number" name="eta">
    <br>
    <br>
    <label for="sesso">Sesso: </label>
    <br>
    <label for="sessoM">M </label>
    <input id="sessoM" type="radio" name="sesso" value="M">
    <label for="sessoF">F </label>
    <input id="sessoF" type="radio" name="sesso" value="F">
    <br>
    <br>
    <label>Corsi: </label>
    <br>
    <label for="corsoPHP">Corso PHP </label>
    <input id="corsoPHP" type="checkbox" name="corsi[]" value="php">
    <br>
    <label for="corsoJava">Corso Java </label>
    <input id="corsoJava" type="checkbox" name="corsi[]" value="java">
    <br>
    <label for="corsoHTML">Corso HTML </label>
    <input id="corsoHTML" type="checkbox" name="corsi[]" value="html">
    <br>
    <br>
    <label for="citta">Città di residenza:</label> <!--Dropdown list -->
    <br>
    <select name="citta">
        <option value="">Seleziona</option>
        <option value="Roma">Roma</option>
        <option value="Milano">Milano</option>
        <option value="Firenze">Firenze</option>
        <option value="Rovigo">Rovigo</option>
        <option value="Napoli">Napoli</option>
        <option value="Palermo">Palermo</option>
    </select>
    <br>
    <br>
    <label for="lingua">Lingue conosciute: </label> <!--List box multipla -->
    <br>
    <select name="lingua[]" multiple>
        <option value="inglese">Inglese</option>
        <option value="tedesco">Tedesco</option>
        <option value="francese">Francese</option>
        <option value="cinese">Cinese</option>
        <option value="italiano">italiano</option>
    </select>
    <br>
    <br>
    <label for="area">Parlaci di te...</label>
    <br>
    <textarea name="area"></textarea>
    <br>
    <button type="submit">Invia</button>
</form>

</body>
</html>