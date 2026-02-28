<?php
//Queste variabili hanno come scope tutto il progetto
echo $_SERVER["SERVER_NAME"];
echo "<br>";

echo $_SERVER["PHP_SELF"]; // Percorso dove risiede lo script
echo "<br>";

echo $_SERVER["REMOTE_ADDR"];
echo "<br>";

echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
?>