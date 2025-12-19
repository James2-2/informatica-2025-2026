<?php
//Una funzione di callback è una funzione passata per argomento
//ad un altra funzione che può essere utlizzata in un secondo momento o a verificarsi di un evento

function esegui($callback){
    $callback();
}
function saluta(){
    echo "ciao";
}

esegui("saluta");

echo "<br>";
function esegui2($nomeFunz){
    $nomeFunz();
}
function saluta2 (){
    echo "ciao ciao";
}

esegui2("saluta2");
echo "<br>";

#callback con parametri
function applica ($callback, $val){
    return $callback($val);
}

function doppio ($x){
    return $x * 2;
}

echo applica("doppio", 3);
echo "<br>";

//Callback con funzione anonima: non ha bisogno della funzione di callback
echo applica(function ($x){
    $x++;
    return $x +2;
}, 10);
echo "<br>";

//Arrow Function - Funzioni anonime
echo "<hr>";
echo applica(fn($n) => $n * 2, 5); //La lambda si usa solo con un'istruzione sola