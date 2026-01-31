<?php

// Costruttore con 3 stringhe e 1 array associativo come parametri
$db = new PDO(
    "mysql:host=192.168.60.144;dbname=giacomo_redi_itis;charset=utf8mb4",
    "giacomo_redi",
    "strariperebbero.dassistenza.",
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // PHP Data Object, una tupla diventa un oggetto
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gli errori di sql vengono gestiti come eccezioni
    ]
);
/*
//READ
$query = "select * from studenti";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> execute(); // Esegue la query

    while($user = $stmt->fetch()){ // Legge una riga alla volta
        echo "nome: ". $user -> nome. "<br>";
        echo "cognome: ". $user -> cognome. "<br>";
        echo "media: ". $user -> media. "<br>";
        echo "data_iscrizione: ". $user -> data_iscrizione. "<br>";
        echo "<hr>";
    }
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}
*/

/*
//READ 2
$studentname = "Antonio";
$query = "select media, cognome from studenti where nome = :name"; // : marcatore

try {
    $stmt = $db -> prepare($query);
    $stmt -> bindValue(":name", $studentname, PDO::PARAM_STR); // Collego
    $stmt -> execute();

    while($user = $stmt->fetch()){
        echo "cognome: ". $user -> cognome. "<br>";
        echo "media: ". $user -> media. "<br>";
        echo "<hr>";
    }

    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}
*/

//CREATE
$query = "insert into studenti (nome, cognome, media, data_iscrizione) 
values (:nome, :cognome, :media, NOW())";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> bindValue(":nome", "Lucy", PDO::PARAM_STR);
    $stmt -> bindValue(":cognome", "Taylor", PDO::PARAM_STR);
    $stmt -> bindValue(":media", 8, PDO::PARAM_INT);
    $stmt -> execute(); // Esegue la query

    echo "Insert succssful <br>";
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}


$query = "select * from studenti";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> execute(); // Esegue la query

    while($user = $stmt->fetch()){ // Legge una riga alla volta
        echo "nome: ". $user -> nome. "<br>";
        echo "cognome: ". $user -> cognome. "<br>";
        echo "media: ". $user -> media. "<br>";
        echo "data_iscrizione: ". $user -> data_iscrizione. "<br>";
        echo "<hr>";
    }
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}