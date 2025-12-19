<?php

echo "Operatore ternario condizionale";
$x = 5;

$risultato = $x > 6 ? "Ok" : "Non ok";
echo "<br>";
echo $risultato;

echo "<br>";
echo "<br>";

echo "Operatore Coalescing";
echo "<br>";
$nome = "5F";
$risultato2 = $nome ?? "Default"; //Se è nullo o la variabile non esiste ritorna default
echo $risultato2;

echo "<br>";
echo "<br>";

echo "Operatore Spaceship";
echo "<br>";
$y = 5;
$x = 6;

echo $x <=> $y; //ritorna -1 se il valore a sinistra è più piccolo, 1 se il contrario, 0 se uguali