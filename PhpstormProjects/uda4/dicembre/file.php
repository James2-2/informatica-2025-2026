<?php
echo getcwd(); //Mostra la directory dello script
echo "<br>";
echo DIRECTORY_SEPARATOR; //Mostra il separatore di directory che usa il nsotro sistema

echo "<br>";

$path = getcwd();
echo is_file($path.DIRECTORY_SEPARATOR."provaFile.txt") ? "true" : "false"; //true se il file è presente nel path corrente
echo "<br>";
echo is_dir($path.DIRECTORY_SEPARATOR."prova") ? "true" : "false"; //true se esiste la cartella nel path corrente
echo "<br>";

$items = scandir($path.DIRECTORY_SEPARATOR."prova"); //Guarda i file all'interno della cartella prova
echo "<h1> File nella mia directory </h1>";
echo "<ul>";
foreach ($items as $item){
    if($item != "." && $item != ".."){
        echo "<li>".$item. "</li>";
    }
}
echo "</ul>";

$file = fopen("prova.txt", "w"); //Se il file non esiste lo crea. Sovrascrive il file
fwrite($file, "Ciao a tutti");
fclose($file);

$file2 = fopen("prova.txt", "a"); //Aggiunge alla fine del file, non sovrascrive
fwrite($file2, "Ciao a tutti 2");
fclose($file2);

$classe = [
    "studente1" => ["nome1","cognome1", 8],
    "studente2" => ["nome2","cognome2", 9],
    "studente3" => ["nome3","cognome3", 5],
    "studente4" => ["nome4","cognome4", 4],
    "studente5" => ["nome5","cognome5", 1],
    "studente6" => ["nome6","cognome6", 2],
];

$file = fopen("voti.txt","w");
foreach ($classe as $stud){
    $line = implode(", ",$stud).PHP_EOL; //Prende gli elementi dell'array e li converte in stringa perchè fwrite() scrive delle stringhe
    fwrite($file, $line);
}
fclose($file);

$file = fopen("voti.txt","w");
foreach ($classe as $key => $stud){
    $line = $key.", ".implode(", ",$stud).PHP_EOL;
    fwrite($file, $line);
}
fclose($file);

$datiFromFile = [];
$file = fopen("voti.txt", "r");
while($line = fgets($file) != false){
    $datiFromFile[] = trim($line); //Toglie gli spazi
}
fclose($file);

foreach($datiFromFile as $dati){
    echo $dati."<br>";
}

echo $datiFromFile[1]."<br>";

$frase = "Oggi è una bella giornata";
$arrayFrase = explode(" ",$frase); //explode() converte da stringa ad array

foreach($arrayFrase as $parola){
    echo $parola."<br>";
}

// Lettura del file riga per riga
$file = fopen($nomeFile, "r");

$righe = [];
while (!feof($file)) {
    $riga = fgets($file);
    if ($riga !== false) {
        $righe[] = trim($riga);
    }
}
fclose($file);

/* ---------- file_put_contents() ---------- */
// Scrittura rapida (aggiunta al file)
file_put_contents($nomeFile, "\nMySQL", FILE_APPEND);


/* ---------- file_get_contents() ---------- */
// Lettura rapida del file
$contenuto = file_get_contents($nomeFile);
echo "Contenuto del file con file_get_contents():<br>";
echo $contenuto;