<?php
if($_SERVER["REQUEST_METHOD"] === "GET"){

    $nome = trim($_GET["nome"] ?? "");
    $cognome = trim($_GET["cognome"] ?? "");
    $numero_tessera = ($_GET["numero_tessera"] ?? "");
    $data_iscrizione = ($_GET["data_iscrizione"] ?? "");
    $password = ($_GET["password"] ?? "");

    echo $nome;
    echo "<br>";
    echo $cognome;
    echo "<br>";
    echo $numero_tessera;
    echo "<br>";
    echo $data_iscrizione;
    echo "<br>";
    echo $password;
    echo "<br>";
}
?>