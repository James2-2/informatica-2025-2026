<?php
$num = -10;

if ($num < 0){
    //die("Numero negativo non consentito");
    //header("Location: error_page.php");
    $msg = "Numero negativo";
    http_response_code(413);
    include "error_page.php";
}