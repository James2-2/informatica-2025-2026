<?php
#Datetime()
$data = new Datetime();
echo "Data e ora di oggi <br>". $data-> format("d/m/y H:i:s");

echo "<br>";

echo "Ora di oggi <br>". $data-> format("H:i:s");

echo "<br>";

echo "Data di oggi <br>". $data-> format("d/m/y");

$data-> modify("+2 days");
echo "<br>";

echo "Data di oggi modificata <br>". $data-> format("d/m/y");

$data2 = new DateTime("+2 days"); //Modifico la data dal costruttore
echo "<br>";
echo "Data di oggi modificata dal costruttore <br>". $data2-> format("d/m/y");

$data2 -> modify("-10 days");
echo "<br>";
echo "Data di oggi modificata <br>". $data2-> format("d/m/y");

echo "<br>";
echo "<br>";

//Differenza tra due date
echo "Differenza tra 2 date";
echo "<br>";
$d1 = new DateTime("2025/01/10 12:20:30");
$d2 = new DateTime("2023/02/15 02:10:10");

$diff = $d1 -> diff($d2);
echo $diff -> days;
echo "<br>";

echo $diff -> m; //Mostra solo i mesi di differenza
echo "<br>";
echo $diff-> y; //Mostra solo gli anni di differenza
echo "<br>";
echo $diff-> format("%y %m %d %h %i %s"); //Mostra la differenza completa tra le due date
echo "<br>";
echo $diff -> format("%i");

$intervaltime = new DateInterval("P1Y3M4DT2H3M4S");
$newDate = $d1 -> add($intervaltime);
echo "<br>";
echo $newDate -> format("d/m/y H:i:s");