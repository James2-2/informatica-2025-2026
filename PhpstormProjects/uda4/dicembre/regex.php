<?php

$testo = "Ciao mondo";

echo preg_match("#mondo#",$testo) ? "Pattern trovato" : "Pattern non trovato";
echo "<br>";
echo preg_match("#^ciao#","mondo ciao") ? "Pattern trovato all'inizio" : "Pattern non trovato all'inizio"; //^ per cercare alla prima posizione
echo "<br>";
echo preg_match("#ciao$#","mondo ciao") ? "Pattern trovato alla fine" : "Pattern non trovato alla fine"; //$ per cercare all'ultima posizione
echo "<br>";

echo preg_match("#[0-9]#","mondo ciao 4256") ? "Pattern numerico trovato" : "Pattern numerico non trovato"; //[0-9] per cercare almeno un numero
echo "<br>";
echo preg_match("#[0-4]#","mondo ciao 9756") ? "Pattern numerico trovato" : "Pattern numerico non trovato"; //[0-4] per cercare almeno un numero da 0 a 4
echo "<br>";
echo preg_match("#[a-z]#","mondo ciao 4256") ? "Pattern trovato" : "Pattern non trovato"; //[a-z] per cercare almeno una lettera
echo "<br>";
echo preg_match("#[A-Ca-c]#","mondo ciao 4256") ? "Pattern trovato" : "Pattern non trovato"; //Cerca almeno una lettera da A a C e da a a c
echo "<br>";
echo preg_match("#[^0-9]#","45") ? "Pattern trovato" : "Pattern non trovato"; //Esclude i numeri, ^ fa da negazione, quindi cerca le lettere
echo "<br>";
echo preg_match("#[aeiou]#","Rovigo") ? "Pattern trovato" : "Pattern non trovato";
echo "<br>";
echo preg_match("#R[aeiou]vigo#","Rovigo") ? "Pattern trovato" : "Pattern non trovato";
echo "<br>";
echo preg_match("#R[aeiou]vigo#","Roaivigo") ? "Pattern trovato" : "Pattern non trovato"; //Non trovato perchè [] trova un solo carattere
echo "<br>";
echo preg_match("#R[aeiou]vigo#","Rvigo") ? "Pattern trovato" : "Pattern non trovato";
echo "<br>";
echo preg_match("#R[aeiou]?vigo#","Rvigo") ? "Pattern trovato" : "Pattern non trovato"; //Con ? il carattere è opzionale
echo "<br>";
echo preg_match("#R[aeiou]*vigo#","Raeiouvigo") ? "Pattern trovato" : "Pattern non trovato"; //Con * comprende tutte le opzioni (nessuno, 1, più di uno)
echo "<br>";
echo preg_match("#R[aeiou]+vigo#","Ravigo") ? "Pattern trovato" : "Pattern non trovato"; //Con + almeno un carattere
echo "<br>";
echo preg_match("#R[aeiou]*vigo[0-9]*#","Raevigo23") ? "Pattern trovato" : "Pattern non trovato";
echo "<br>";
echo "<hr>";

echo preg_match("#R[aeiou]*vigo[0-9]*#","Raevigo23",$matches) ? "Pattern trovato" : "Pattern non trovato"; //Salva in un array ciò che trova
echo "<br>";
var_dump($matches);
echo "<br>";
echo preg_match("#R[aeiou]#","Ravigo",$matches) ? "Pattern trovato" : "Pattern non trovato";
echo "<br>";
var_dump($matches);
echo "<br>";
echo preg_match("#R[aeiou]*#","Raeiiiiiiiivigo",$matches) ? "Pattern trovato" : "Pattern non trovato";
echo "<br>";
var_dump($matches);
echo "<br>";
echo preg_match("#ciao#i","CIAO") ? "Pattern trovato" : "Pattern non trovato"; //i ignora maiuscole e minuscole
echo "<br>";

$tel = "0123456789";
echo preg_match("#[0-9]{3,8}#",$tel, $matches) ? "Pattern trovato" : "Pattern non trovato"; //{3,8} prende minimo 3 e massimo 8 caratteri
echo "<br>";
var_dump($matches);
echo "<br>";
echo preg_match("#verde|rosso|blu#","verde") ? "Pattern trovato" : "Pattern non trovato";