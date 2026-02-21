<?php
$pwd = "123456789";
$hash = password_hash($pwd, PASSWORD_DEFAULT);
echo $hash;
echo "<br>";
echo strlen($hash);
echo "<br>";

if(password_verify($pwd, $hash)){
    echo "Password corretta";
}else{
    echo "Password errata";
}

