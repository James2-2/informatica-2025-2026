<?php
$allowed = ["jpg","png","pdf"]; //Estensione dei file che possiamo caricare

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if($_FILES["file"]["error"] === UPLOAD_ERR_OK){ //C'è stato un errore o no?

        $tmpPath = $_FILES["file"]["tmp_name"]; //Salva temporaneamente il file nel percorso tmp_name
        //echo $tmpPath."<br>";
        $originalName = basename($_FILES["file"]["name"]); //basename ritorna il nome del file senza spazi
        //echo $originalName."<br>";
        $username = $_POST["nome"];
        //echo $username."<br";

        //Extension check
        $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
        if(!in_array($ext, $allowed)){
            http_response_code(403);
            $msg = "Estensione non autorizzata";
            include "message.php";
            exit();
        }

        $maxSize = 2 * 1024 * 1024; //1 MegaByte
        $size = $_FILES["file"]["size"];
        if($size > $maxSize){
            http_response_code(413);
            $msg = "File troppo grande";
            include "message.php";
            exit();
        }

        $userDir = "uploads/".$username;
        if(!is_dir($userDir)){
            mkdir($userDir, 0755);
        }
        $destination = $userDir."/".$originalName;
        move_uploaded_file($tmpPath, $destination);
        $msg = "File caricato corretamente";
        include "message.php";
    }else{
        $msg = "Errore nel caricamento";
        http_response_code(500);
        include "message.php";
    }
}

?>