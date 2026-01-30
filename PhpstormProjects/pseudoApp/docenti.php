<?php
$numCorsi = $_POST["numCorsi"];

$corsi = [
    "Sistemi e reti", "Robotica", "Contabilità", "Meccatronica",
    "Chimica", "Statistica", "Matematica", "Informatica",
    "Marketing", "Economia Politica"
];

$docenti = [
    "Rossi Mario", "Bianchi Luca", "Verdi Anna", "Neri Paolo",
    "Gallo Sara", "Conti Marco", "Russo Elisa"
];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Selezione docenti</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Selezione docenti per corso</h1>

<form action="riepilogo.php" method="post">

    <?php for ($i = 0; $i < $numCorsi; $i++): ?>
        <div class="box">
            <h3>Corso <?= $i + 1 ?></h3>

            <label>Seleziona corso:</label><br>
            <select name="corsi[]">
                <?php foreach ($corsi as $corso): ?>
                    <option value="<?= $corso ?>"><?= $corso ?></option>
                <?php endforeach; ?>
            </select>

            <br>
            <br>

            <label>Seleziona docenti:</label><br>
            <select name="docenti[<?= $i ?>][]" multiple>
                <?php foreach ($docenti as $docente): ?>
                    <option value="<?= $docente ?>"><?= $docente ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php endfor; ?>

    <input type="submit" value="Invia">

</form>

</body>

</html>
