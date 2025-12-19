<?php
echo "Manipolazione numeri e stringhe<br><br>";

$stringa = "ciao e buongiorno 246452";

echo "Stringa originale:". $stringa;
echo "<br>";
echo "strlen (lunghezza): " . strlen($stringa);
echo "<br>";
echo "strrev (invertita): " . strrev($stringa) . "<br>";
echo "strtolower: " . strtolower($stringa) . "<br>";
echo "strtoupper: " . strtoupper($stringa) . "<br>";
echo "ucfirst: " . ucfirst($stringa) . "<br>";
echo "ucwords: " . ucwords($stringa) . "<br><br>";

echo "trim: " . trim($stringa) . "<br>";
echo "ltrim: " . ltrim($stringa) . "<br>";
echo "rtrim: " . rtrim($stringa) . "<br><br>";

$array = explode(" ", $stringa);
echo "explode: ";
print_r($array);
echo "<br>";

echo "implode: " . implode("-", $array) . "<br><br>";

/* sostituzione */
echo "str_replace: " . str_replace("ciao", "Ciao", $stringa) . "<br><br>";

/* substring */
echo "substr (da posizione 5): " . substr($stringa, 5) . "<br>";
echo "substr (5, 10): " . substr($stringa, 5, 10) . "<br><br>";

/* ricerca */
echo "strpos ('buongiorno'): " . strpos($stringa, "buongiorno") . "<br>";
echo "strrpos ('o'): " . strrpos($stringa, "o") . "<br><br>";

echo "strstr ('buongiorno'): " . strstr($stringa, "buongiorno") . "<br>";
echo "stristr ('CIAO'): " . stristr($stringa, "CIAO") . "<br><br>";

/* formattazione */
echo sprintf("Testo formattato: %s", $stringa) . "<br>";

printf("printf: %s<br><br>", $stringa);

/* numeri */
$numero = 246452.5678;
echo "number_format: " . number_format($numero, 2, ",", ".") . "<br><br>";

echo "addslashes: " . addslashes($stringa) . "<br>";
echo "stripslashes: " . stripslashes(addslashes($stringa)) . "<br>";
echo "<br>";
echo "<br>";



//NUMERI
$num = -345.234;
echo abs($num);
echo "<br>";
echo ceil($num);
echo "<br>";
echo floor($num);
echo "<br>";
echo round($num);
echo "<br>";
echo "Valore random".mt_rand();
echo "<br>";
echo rand();
echo "<br>";
echo min($num);
echo "<br>";
echo max($num);
echo "<br>";
echo sqrt($num);
echo "<br>";
echo pow($num, 2);
echo "<br>";
echo intdiv($num, 2);
echo "<br>";
echo number_format($num);
echo "<br>";
echo is_numeric($num);
echo "<br>";
echo is_int($num);
echo "<br>";
echo is_float($num);
echo "<br>";
echo intval($num);
echo "<br>";
echo floatval($num);
echo "<br>";
echo pi();
echo "<br>";
echo log($num);
echo "<br>";
echo exp($num);