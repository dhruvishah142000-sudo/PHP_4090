<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $NAME = $_POST['nm'];  
    $M1   = $_POST['ds'];
    $M2   = $_POST['java'];
    $M3   = $_POST['os'];
}

// explode 
$name   = explode(",", $NAME);
$marks1 = explode(",", $M1);
$marks2 = explode(",", $M2);
$marks3 = explode(",", $M3);
echo "<br>";

print_r($name);
print_r($marks1);
print_r($marks2);
print_r($marks3);
echo "<br>";

// calculate average per student
// calculate average 
$average = ($M1 + $M2 + $M3) / 3;
echo "Average: " . $average; 
echo "<br>";
echo "<br>";

// implode arrays back to strings
$nameStr   = implode(",", $name);
$marks1Str = implode(",", $marks1);
$marks2Str = implode(",", $marks2);
$marks3Str = implode(",", $marks3);
echo "<br>";
?>
