<?php
$var = "ciao";
$num = 10;
$pos = "numero positivo";
$neg = "numero negativo";
$materie = ["informatica, GPOI, sistemi, TPSIT"];
$message = "ciao sono su js";

$studenti = [ //Array che contiene array associativi
    [
        "Nome",
        "Cognome",
        "Media",
        "classe"
    ],
    [
        "nome" => "Enrico",
        "cognome" => "Prearo",
        "media" => 7,
        "classe" => "5F"
    ],
    [
        "nome" => "Marcello",
        "cognome" => "Targa",
        "media" => 8,
        "classe" => "5F"
    ],
    [
        "nome" => "Fabio",
        "cognome" => "Cucu",
        "media" => 9,
        "classe" => "5F"
    ]
]
?>
<!--In sorgente pagina il server toglie la parte di php-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="myStyle.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<p>ciao sono sull'html</p>
<p><?php echo $var ?></p>
<p><?= $var ?></p> <!--Serve per stampare SOLO una variabile -->

<?php if ($num > 0): ?>
    <h1><?php $pos ?></h1>
<?php else: ?>
    <h1><?= $neg ?></h1>
<?php endif; ?>

<?php foreach ($materie as $item): ?>
    <p><?= $item ?></p>
    <hr>
<?php endforeach; ?>

<p> <?= $studenti[0]["nome"] ?></p>

<table>
    <tr>
        <?php foreach ($studenti[0] as $key): ?>
            <th><?= ($key) ?></th>
        <?php endforeach; ?>
    </tr>
    <tbody>
    <?php foreach ($studenti as $studente): ?>
        <tr>
            <?php foreach ($studente as $item): ?>
            <td> <?= $item ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<?php
$i = 1;
while ($i <= 4):
    ?>
    <div>Riga <?= $i ?></div>
    <?php
    $i++;
endwhile;
?>


<?php
$i = 1;
do {
    ?>
    <p>Valore <?= $i ?></p><br>
    <?php
    $i++;
} while ($i <= 3);
?>


<footer>
    <p>&copy; 2026 Nome Azienda. Tutti i diritti riservati.</p>
    <p>
        <p>Informativa sulla Privacy</p>
        <p>Contatti</p>
    </p
</footer>

<button id="myButton">Premi</button>
<script> message = <?= json_encode($message) ?></script> <!-- Trasforma il contenuto della varibiale in json -->
<script src="myScript.js"></script>

</body>
</html>
