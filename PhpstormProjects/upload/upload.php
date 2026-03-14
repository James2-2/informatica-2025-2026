<?php
$tmpPath = $_FILES["file"]["tmp_name"]; //Salva temporaneamente il file nel percorso tmp_name
$destination = "uploads/";
move_uploaded_file($tmpPath, $destination);
?>