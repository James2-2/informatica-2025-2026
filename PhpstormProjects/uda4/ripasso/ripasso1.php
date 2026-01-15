<?php
//PHP-1
//Operatori

$num = 5;
if($num == "5"){
    echo "Uguali";
}else{
    echo "Diversi";
}

echo "<br>";

if($num === "5"){
    echo "Uguali";
}else{
    echo "Diversi";
}

echo "<br>";

$risultato = $num > 5 ? "Maggiore di 5" : "Minore o uguale a 5"; //Operatore ternario condizionale
echo $risultato;

echo "<br>";

$risultato2 = $nome ?? "Non esiste o è NULL"; //Operatore Coalescing
echo $risultato2;

echo "<br>";
$x = 5;
$y = 6;
echo $x <=> $y; //Operatore Spaceship: ritorna -1 se il valore a sinistra è più piccolo, 1 se il contrario, 0 se uguali

echo "<br>";


//Strutture dati

$array = [10,30,100];
echo $array[1];

echo "<br>";

$arrayAssociativo = [
    "nome" => "Giovanni",
    "cognome" => "Rossi",
    "eta" => 10
];
echo $arrayAssociativo["cognome"];

echo "<br>";

//Funzioni

$numeri = [10, 20, 30];

$studente = [
    "nome" => "Bob",
    "classe" => "5A"
];

echo "<br>";

$totNumeri = count($numeri);
echo "<br>";

$esiste = in_array(20, $numeri);
echo "<br>";

$controllo = isset($studente["nome"]);
echo "<br>";

$nomeMaiuscolo = strtoupper($studente["nome"]);
echo "<br>";

print_r($studente);
echo "<br>";
