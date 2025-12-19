<?php

$frutti = [
    "a" => "Mela",
    "b" => "Pera",
    "c" => "Banana"
];
print_r(array_keys($frutti)); // Restituisce tutte le chiavi
echo "<br>";

print_r(array_values($frutti)); // Restituisce tutti i valori
echo "<br>";

$persona = [
    "nome" => "Luca",
    "eta" => 30
];

if (array_key_exists("nome", $persona)) {
    echo "La chiave esiste\n";
} else {
    echo "La chiave non esiste\n";
}

echo "<br>";

if (isset($persona["eta"])) {
    echo "La variabile esiste e non è NULL\n";
} else {
    echo "Non esiste\n";
}
echo "<br>";

$numeri = [1, 2, 3];
if (in_array(2, $numeri)) {
    echo "2 è presente\n";
} else {
    echo "2 non è presente\n";
}
echo "<br>";

$pos = array_search("Pera", $frutti);
echo "Posizione di 'Pera': $pos\n";
echo "<br>";

unset($persona["eta"]);
print_r($persona); // "eta" è stata eliminata
echo "<br>";

$a = [1, 2];
$b = [3, 4];
print_r(array_merge($a, $b)); // Unisce gli array
echo "<br>";

$valori = [
    "a" => "Banana",
    "b" => "Mela",
    "c" => "Ananas"
];
asort($valori); // Ordina per valore crescente
print_r($valori);
echo "<br>";

$valori = [
    "a" => "Banana",
    "b" => "Mela",
    "c" => "Ananas"
];
arsort($valori); // Ordine decrescente
print_r($valori);
echo "<br>";

$chiavi = [
    "c" => "Banana",
    "a" => "Mela",
    "b" => "Ananas"
];
ksort($chiavi); // Ordina per chiavi crescente
print_r($chiavi);
echo "<br>";

krsort($chiavi); // Ordina per chiavi decrescente
print_r($chiavi);
echo "<br>";

$numeri = [1, 2, 3];
$doppi = array_map(function ($n) {
    return $n * 2;
}, $numeri);
print_r($doppi);
echo "<br>";

$numeri = [1, 2, 3, 4, 5];
$pari = array_filter($numeri, function ($n) {
    return $n % 2 == 0;
});
print_r($pari);
echo "<br>";

echo "Walk";
echo "<br>";
$frutti = ["Mela", "Pera"];
array_walk($frutti, function ($item, $key) { // A differenza di map non ritorna un array ma lo modifica subito
    echo $key . ": " . $item . "\n";
});
echo "<br>";

$frutti = ["Mela", "Pera", "Banana", "Kiwi"];
$pezzo = array_slice($frutti, 1, 2);
print_r($pezzo);
echo "<br>";

$frutti = ["Mela", "Pera", "Banana", "Kiwi"];
array_splice($frutti, 1, 2); // Rimuove "Pera" e "Banana"
print_r($frutti);
echo "<br>";

echo "<br>";
echo "<br>";

$risultato_lambda = array_map(fn($n) => $n*2 , $numeri); //Lambda
var_dump($risultato_lambda);