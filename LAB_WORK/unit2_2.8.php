<?php 

//2.8 Write a PHP code to use mysql date and time functions as given bellow:
//DAYOFWEEK(),WEEKDAY(),DAYOFMONTH(),DAYOFYEAR(),DAYNAME(),MONTH(),MONT(),HNAME(),WEEK(),NOW(),SYSDATE(),CURRENT_TIMESTAMP()

$now = date("Y-m-d H:i:s");

echo "<h2>PHP Date and Time Functions (Similar to MySQL)</h2>";
echo "<table border='1' cellpadding='5'>";

// NOW(), SYSDATE(), CURRENT_TIMESTAMP()
echo "<tr><td><b>NOW()</b></td><td>" . $now . "</td></tr>";
echo "<tr><td><b>SYSDATE()</b></td><td>" . date("Y-m-d H:i:s") . "</td></tr>";
echo "<tr><td><b>CURRENT_TIMESTAMP()</b></td><td>" . date("Y-m-d H:i:s") . "</td></tr>";

// DAYOFWEEK() — Sunday=1, Monday=2, ..., Saturday=7
echo "<tr><td><b>DAYOFWEEK()</b></td><td>" . date("N", strtotime($now)) . "</td></tr>";

// WEEKDAY() — Monday=0, Sunday=6
$weekday = date("w", strtotime($now)) - 1;
if ($weekday < 0) $weekday = 6;
echo "<tr><td><b>WEEKDAY()</b></td><td>" . $weekday . "</td></tr>";

// DAYOFMONTH()
echo "<tr><td><b>DAYOFMONTH()</b></td><td>" . date("j", strtotime($now)) . "</td></tr>";

// DAYOFYEAR()
echo "<tr><td><b>DAYOFYEAR()</b></td><td>" . date("z", strtotime($now)) + 1 . "</td></tr>";

// DAYNAME()
echo "<tr><td><b>DAYNAME()</b></td><td>" . date("l", strtotime($now)) . "</td></tr>";

// MONTH()
echo "<tr><td><b>MONTH()</b></td><td>" . date("n", strtotime($now)) . "</td></tr>";

// MONTHNAME()
echo "<tr><td><b>MONTHNAME()</b></td><td>" . date("F", strtotime($now)) . "</td></tr>";

// WEEK()
echo "<tr><td><b>WEEK()</b></td><td>" . date("W", strtotime($now)) . "</td></tr>";

echo "</table>";
?>

?>