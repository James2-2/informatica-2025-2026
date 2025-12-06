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

echo "Nome dello studente: ".$studente["nome"];

//TIPI DI VARIABILI
//SCALARI: INT, STRING
//COMPOSTE: ARRAY, ARRAY ASSOCIATIVI, OGGETTI
//PSEUDOVARIABILI: FUNZIONE (CALLBACK)

//STATI DELLE VARIABILI
//DEFINITE/NON DEFINITE: isset();
//SETTATE/NON SETTATE: empty();
//NULL/DIVERSO DA NULL: isnull();

//FALSY: 0, 0.0, "0", FALSE, " ", [ ], NULL (Non contengono niente)
//TRUTHY: TRUE, [...] (Contengono qualcosa)

//== LOOSE
//=== STRICT

$studente["cognome"] = "Bianchi";
echo "<br>";

foreach ($studente as $chiave => $valore){
    echo "<br>";
    echo "$chiave: $valore";
}

//Array associativo annidato
echo "<br>";
echo "<br>";
echo "Array associativi annidati";

$studenti = [
    "studente1" =>[
        "nome" => "Gigi",
        "voto"=> 7
    ],
    "studente2" =>[
        "nome"=> "Matteo",
        "voto" => 8
    ]
];

echo "<br>";
echo $studenti["studente2"] ["nome"];
echo "<br>";
echo $studenti["studente2"] ["voto"];

$config = [
    "database" => "mio_db",
    "utente" => "admin",
    "password" => "12345"
];

echo "<br>";
if(array_key_exists("nome" , $studente))
    echo "Chiave trovata";
else
    echo "Chiave non trovata";

echo "<br>";
echo "Elenco delle chiavi:  ";
$chiavi = array_keys($studente);
var_dump($chiavi); //Mostra l'elenco delle chiavi

echo "<br>";
echo "Valori all'interno dell'array:  ";
$valori = array_values($studente);
var_dump($valori);

echo "<br>";
echo $valori [1]; //Visualizzo le età
echo "<br>";
echo "<br>";

if(array_key_exists("età" , $studente)){
    echo "Chiave trovata";
    echo "<br>";
    echo $studente ["età"];
}else
    echo "Chiave non trovata";

$var1 = 5;
$var2 = "5";

echo "<br>";
if($var1 == $var2) //Converte la stringa in numero; true
    echo "Sono uguali";
else
    echo "Sono diversi";

echo "<br>";
if($var1 === $var2) //Non converte; false
    echo "Sono uguali";
else
    echo "Sono diversi";

echo "<br>";
echo "<br>";
$a = NULL; //falsy: sono vuoti, esistono e non null (a parte quando uso NULL)
$a = 0;
$a = " ";
$a = [ ];
$a = "0";
$a = 0.0;

if(isset($a)) //Restituisce false se la variabile non esiste o è NULL
    echo "Esiste";
else
    echo "Non esiste";

echo "<br>";
if(is_null($a)) //Restituisce false se la variabile non è NULL
    echo "La variabile è nulla";
else
    echo "La variabile non è nulla";

echo "<br>";
if(empty($a)) //Restituisce true se la variabile è falsy
    echo "La variabile è vuota";
else
    echo "La variabile non è vuota";