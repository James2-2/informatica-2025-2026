<?php
function somma($a, $b){
    return $a + $b;
}
echo somma(3,4.50);
echo "<br>";

//Union types: permettono di dichiarare parametri o valori di ritorno che possono essere di più tipi diversi
function somma2(int|float $a, int|float $b) : int|float {
    return $a + $b;
}
echo somma2(3,4.5);
echo "<br>";


function stampa(int|string $v) : void {
    echo "Hai passato: $v";
}
stampa(2);

//Nullable types: un tipo è nullable se può contenere quel tipo oppure NULL
echo "<br>";
function saluta(?string $nome): string{
    return "Ciao". ($nome ?? " Ospite");
}

echo saluta(null);
echo "<br>";
echo saluta(" Marco");
echo "<br>";
function saluta2(string $nome = "utente"): string{
    return "Ciao ".$nome ;
}
echo saluta2();
echo "<br>";

$myvar = 10;
function myfunction($myvar){
    echo $myvar + 1;
}
echo "<br>";
myfunction($myvar);
echo "<br>";
echo $myvar;

function myfunc(&$myvar){ //Passaggio per riferimento
    $myvar = $myvar + 1;
    echo $myvar;
}

echo "<br>";
myfunc($myvar);
echo "<br>";
echo $myvar;

echo "<br>";
function sommaTotale(...$numeri): int|float{
    return array_sum($numeri);
}
echo "<br>";
echo sommaTotale(1,2,3,4,5);
echo "<br>";
echo sommaTotale(1,2,3,4,5,6,7,8,9,10);

//VALORE DI DEFAULT
function moltiplica(int $a, int $b = 2): int {
    return $a * $b;
}

echo moltiplica(5);      // 10
echo moltiplica(5, 4);   // 20