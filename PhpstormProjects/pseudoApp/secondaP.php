<?php

$professori = [
    1 => [
        "nome" => "Astolfi",
        "cognome" => "Verdi"
    ],
    2 => [
        "nome" => "Franco",
        "cognome" => "Rossi"
    ],
    3 => [
        "nome" => "Bob",
        "cognome" => "Bianchi"
    ],
    4 => [
        "nome" => "Carl",
        "cognome" => "Neri"
    ],
    5 => [
        "nome" => "David",
        "cognome" => "Scott"
    ],
    6 => [
        "nome" => "Emilio",
        "cognome" => "Gianni"
    ],
];

$corsi = [
    "Sistemi e reti",
    "Robotica",
    "Contabilità",
    "Meccatronica",
    "Chimica",
    "Statistica",
    "Matematica",
    "Informatica",
    "Marketing",
    "Economia politica"
];

$nCorsi = $_POST["nCorsi"] ?? 0;
?>

<!--
Seconda pagina con titolo iscrizione corsi dove esce un numero di rettangoli pari al numero scelto prima, dentro Corso 1, 2, 3
e una listbox con elenco dei professori + una dropdown con elenco dei corsi
tasto invio
Terza pagina con titolo iscrizione corsi, con tabella con cognome, nome, corso
Il nome dei professori arriva da un array e anche i corsi
-->

<!doctype html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Iscrizione corsi</h1>

<form method="POST" action="terzaP.php">

    <?php for ($i = 0; $i < $nCorsi; $i++): ?>
        <div class="box">
            <h3>Corso <?php echo $i + 1; ?></h3>

            <label id="professori">Professori</label><br>
            <select name="professori[<?php echo $i; ?>][]" multiple>
                <?php foreach ($professori as $id => $prof): ?>
                    <option value="<?php echo $id; ?>">
                        <?php echo $prof["cognome "] . $prof["nome"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <br>
            <br>

            <label id="elencoCorsi">Elenco dei corsi</label><br>
            <select name="elencoCorsi[]">
                <?php foreach ($corsi as $valore): ?>
                    <option value="<?php echo $valore; ?>">
                        <?php echo $valore; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php endfor; ?>



    <button type="submit">Invia</button>

</form>

</body>
</html>