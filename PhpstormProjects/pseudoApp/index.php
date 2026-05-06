<?php



?>

<!--Prima pagina chiede quanti corsi vuoi fare? (da 1 a 10) + tasto invio
Seconda pagina con titolo iscrizione corsi dove esce un numero di rettangoli pari al numero scelto prima, dentro Corso 1, 2, 3
e una listbox con elenco dei professori + una dropdown con elenco dei corsi
tasto invio
Terza pagina con titolo iscrizione corsi, con tabella con cognome, nome, corso
Il nome dei professori arriva da un array e anche i corsi
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Iscrizione corsi</h1>

<form method="POST" action="secondaP.php">

    <label for ="nCorsi">Quanti corsi vuoi fare?</label>
    <br>
    <input id="nCorsi" type="number" name="nCorsi" min="1" max="10">
    <br>
    <br>
    <button type="submit">Invia</button>

</form>
</body>
</html>