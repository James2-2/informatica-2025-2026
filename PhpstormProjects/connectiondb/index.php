<?php

$dbconfig = require "configuration/dbConfiguration.php"; //Porta dentro l'array associativo del file di configurazione del database
require "databaseConnection.php";
$db = databaseConnection::getDB($dbconfig);

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
/*
$query = "insert into studenti (nome, cognome, media, data_iscrizione) 
values (:nome, :cognome, :media, NOW())";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> bindValue(":nome", "Lucy", PDO::PARAM_STR);
    $stmt -> bindValue(":cognome", "Taylor", PDO::PARAM_STR);
    $stmt -> bindValue(":media", 8, PDO::PARAM_INT);
    $stmt -> execute(); // Esegue la query

    echo "Insert succssful <br> <br>";
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}
*/

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


$query = "update studenti 
    set media = :media 
    where nome = :nome";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> bindValue(":nome", "Antonio", PDO::PARAM_STR);
    $stmt -> bindValue(":media", 6, PDO::PARAM_INT);
    $stmt -> execute(); // Esegue la query

    if($stmt -> rowCount() === 0){
        echo "No rows were updated";
        echo "<br>";
    }else{
        echo "Update successful";
    }
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}


$query = "delete from studenti 
    where nome = :nome";

try{
    $stmt = $db -> prepare($query); // Prepara la query
    $stmt -> bindValue(":nome", "Lucy", PDO::PARAM_STR);
    $stmt -> execute(); // Esegue la query

    if($stmt -> rowCount() === 0){
        echo "Delete failed: no rows matched the given name";
    }else{
        echo "Record deleted";
    }
    $stmt -> closeCursor();

}catch (PDOException $e){
    echo "A DB error occured. Please try again later";
}

