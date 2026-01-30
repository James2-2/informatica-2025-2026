<?php
$corsi = $_POST["corsi"];
$docenti = $_POST["docenti"];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo</title>
</head>
<body>

<h1>Riepilogo iscrizioni</h1>

<table>
    <tr>
        <th>Nome e Cognome</th>
        <th>Corso</th>
    </tr>

    <?php
    for ($i = 0; $i < count($corsi); $i++) {
        if (!empty($docenti[$i])) {
            foreach ($docenti[$i] as $docente) {
                $chiave = $docente . "-" . $corsi[$i];
            }
        }
    }
    ?>
</table>

</body>

</html>
