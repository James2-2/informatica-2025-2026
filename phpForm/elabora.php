<?php
$nome = $_POST ["nome"] ?? ""; //$_POST è super global, un array associativo. nome è la chiave dell'array associativo
//La variabile contiene i dati inseriti nel form se uso il metodo post
$cognome = $_POST ["cognome"] ?? "";
$email = $_POST ["email"] ?? "";
$password = $_POST ["password"] ?? "";
$eta = $_POST ["eta"] ?? "";
$sesso = $_POST ["sesso"] ?? "";
$corsi = $_POST ["corsi"] ?? "";
$citta = $_POST ["citta"] ?? "";
$lingue = $_POST ["lingua"] ?? "";
$area = $_POST ["area"] ?? "";
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

    <!--<p>Nome: <?=$nome?></p>
    <p>Cognome: <?=$cognome?></p>
    <p>Email: <?=$email?></p>
    <p>Password: <?=$password?></p>
    <p>Età: <?=$eta?></p>
    <p>Sesso: <?=$sesso?></p>
    <p>Corsi: <?=implode(",", $corsi)?></p>
    <p>Città: <?=$citta?></p>
    <p>Lingue: <?=implode(",", $lingue)?></p>
    <p>Area: <?=$area?></p> -->

    <?php foreach ($_POST as $chiave => $valore){ ?>
        <p>
            <p><?=$chiave?>:</p>
            <?php
            if (is_array($valore)) {
                echo implode(", ", $valore);
            } else {
                echo $valore;
            }
            ?>
        </p>
    <?php } ?>

</body>
</html>