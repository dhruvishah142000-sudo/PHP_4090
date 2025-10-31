<?php

////2.7 Write a PHP code to use mysql string manipulation functions as given bellow:
//Length(),concat(),concat_ws(),trim(),rtrim(),ltrim(),lpad(),rpad(),locate(),strstr(),subst


$STR1="HELLO FROM DHRUVI.";
$STR2="HAPPY 😍";

echo "Length() : ".strlen($STR1) . "\n";
echo "<br/>";
echo "<br/>";

echo "Concat() : ".$STR2. "!!!" . "\n";
echo "<br/>";
echo "<br/>";

echo "CONCAT_WS(): " . implode('-', ['2025', '10', '10']) . "\n";
echo "<br/>";
echo "<br/>";

echo "Trim() :". trim($STR2) . "\n";
echo "<br/>";
echo "<br/>";

echo "Rtrim() : ".rtrim($STR1) . "\n";
echo "<br/>";
echo "<br/>";

echo "Ltrim() : ".ltrim($STR1) . "\n";
echo "<br/>";
echo "<br/>";

echo "LPAD(): " . str_pad('5', 4, '0', STR_PAD_LEFT) . "\n";
echo "<br/>";
echo "<br/>";

echo "RPAD(): " . str_pad('5', 4, '*', STR_PAD_RIGHT) . "\n";
echo "<br/>";
echo "<br/>";

$pos = strpos($STR1, $STR2);
echo "LOCATE(): " . ($pos === false ? 0 : $pos + 1) . "\n";
echo "<br/>";
echo "<br/>";

echo "STRSTR(): " . strstr($STR1, $STR2) . "\n";
echo "<br/>";
echo "<br/>";

echo "SUBSTR(): " . substr(trim($STR2), 6, 5) . "\n";
echo "<br/>";
echo "<br/>";


?>