<?php
$file = "utenti.json";

$nome = $_POST['nome'] ?? '';
$cognome = $_POST['cognome'] ?? '';
$tessera = $_POST['tessera'] ?? '';
$data_iscrizione = $_POST['data_iscrizione'] ?? '';
$password = $_POST['password'] ?? '';


// Carica gli utenti già registrati prima di aggiungerne uno nuovo
if (file_exists($file)) {
    $utenti = json_decode(file_get_contents($file), true);
    if (!is_array($utenti)) $utenti = [];
} else {
    $utenti = [];
}

// Salvataggio password in chiaro
if (!empty($nome) && !empty($cognome)) {
    $utenti[] = [
            'nome' => $nome,
            'cognome' => $cognome,
            'tessera' => $tessera,
            'data_iscrizione' => $data_iscrizione,
            'password' => $password
    ];
    file_put_contents($file, json_encode($utenti, JSON_PRETTY_PRINT)); // Salva l’array aggiornato nel file utenti.json
    // usando file_put_contents() e lo converte in JSON
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo Utenti | Biblioteca comunale</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Utenti registrati (debug)</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Numero Tessera</th>
            <th>Data di iscrizione</th>
        </tr>
        <?php foreach ($utenti as $utente): ?>
            <tr>
                <td><?= $utente['nome'] ?></td>
                <td><?= $utente['cognome'] ?></td>
                <td><?= $utente['tessera'] ?></td>
                <td><?= $utente['data_iscrizione'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a class="button" href="formRegistrazione.php">Registra un altro utente</a>
    <a class="button" href="index.php">Torna alla home</a>
</div>
</body>
</html>