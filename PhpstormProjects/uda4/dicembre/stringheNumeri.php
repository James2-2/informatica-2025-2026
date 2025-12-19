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


// NUMERI
$num = -345.234;

echo abs($num);              // Valore assoluto
echo "<br>";

echo ceil($num);             // Arrotonda per eccesso
echo "<br>";

echo floor($num);            // Arrotonda per difetto
echo "<br>";

echo round($num);            // Arrotondamento standard
echo "<br>";

echo "Valore random: " . mt_rand();
echo "<br>";

echo rand(1, 100);           // Random con range
echo "<br>";

echo min($num, 10, 20);      // min richiede più valori
echo "<br>";

echo max($num, 10, 20);      // max richiede più valori
echo "<br>";

// sqrt e log NON accettano numeri negativi
echo sqrt(abs($num));
echo "<br>";

echo pow($num, 2);           // Potenza
echo "<br>";

// intdiv accetta SOLO interi
echo intdiv((int)$num, 2);
echo "<br>";

echo number_format($num, 2, ',', '.');
echo "<br>";

echo is_numeric($num);       // 1 = true
echo "<br>";

echo is_int($num);           // false
echo "<br>";

echo is_float($num);         // true
echo "<br>";

echo intval($num);
echo "<br>";

echo floatval($num);
echo "<br>";

echo pi();
echo "<br>";

// log solo su valore positivo
echo log(abs($num));
echo "<br>";

echo exp(1);                 // exp di un numero valido
