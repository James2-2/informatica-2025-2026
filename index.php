<?php

echo 'ciao mondo'; //Output
echo '<br>';
echo 'Buongiorno a tutti';
echo '<br>';

$var = 10;
echo 'Il valore della variabile è:  '.$var;
echo '<br>';
var_dump($var); //Stampa il valore della variabile e il tipo
echo '<br>';

$var2  = 2.50;
echo 'Il valore della variabile è:  '.$var2;
echo '<br>';
var_dump($var2);

echo '<br>';
$var2 = 'ciao';
var_dump($var2);

//Costanti
echo '<br>';
echo M_PI;
echo '<br>';
echo PHP_INT_MAX; //Massimo numero intero in php
echo '<br>';
echo PHP_INT_MIN;

echo '<br>';

if($var2 > 5)
    echo "Confronto effetuato";
else echo "ciao";

echo '<br>';

// echo phpinfo(); //Configurazione php engine
// echo '<br>';

echo '<br>';

echo "Dichiarazione vettori";
$vett = [10,20,30];
$vett2 = [];
echo '<br>';

echo "Alla posizione 0 abbiamo il numero ".$vett[0];
echo '<br>';

$n = count($vett); //Restituisce il conteggio degli elementi nel vettore
echo "Numero di elementi nel vettore: ".$n;
echo '<br>';

echo "Numeri presenti nel vettore: ";
for($i = 0; $i < $n; $i++){
    echo " ".$vett[$i];
}

echo '<br>';
print_r($vett); //Come il for ma stampa in modo diverso

echo '<br>';
$vett3 = [10,7, 'a','b'];
var_dump($vett3);

echo '<br>';
echo '<br>';
echo 'Aggiunta di un elemento';
echo '<br>';
array_push($vett3, 50); //Aggiunge un elemento alla fine
echo implode(" ", $vett3);

echo '<br>';

$vett3[] = 60;
echo implode(" ", $vett3);

echo '<br>';
echo '<br>';
echo 'Rimozione di un elemento';
echo '<br>';
array_pop($vett3); //Toglie l'ultimo elemento
echo implode(" ", $vett3);

echo '<br>';
echo '<br>';
echo 'Controllo se esiste un elemento';
echo '<br>';

if (in_array(10, $vett3))
    echo "Il numero esiste";
else
    echo "Il numero non esiste";

echo "<br>";
echo "<br>";
echo "Vettore ordinato: ";
sort($vett3);
echo implode(" ", $vett3);

echo "<br>";
echo "<br>";
//Array associativi
$studente = [
    "nome" => "Marco",
    "età"=> 18,
    ];

echo $studente["nome"];