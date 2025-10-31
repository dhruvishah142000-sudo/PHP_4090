<?php

//2.9 Write a PHP code to use mysql date and time functions as given bellow:
//HOUR(),MINUTE(),SECOND(),DATE_FORMAT(),DATE_SUB(),DATE_ADD(),CURDATE(),CURRENT_DATE(),CURTIME()/CURRENT_TIME(),UNIX_TIMESTAMP(), FROM_UNIXTIME().


echo "<h2>PHP Equivalent of MySQL Date and Time Functions</h2>";
echo "<table border='1' cellpadding='5'>";

date_default_timezone_set("Asia/Kolkata"); // set timezone

$now = date("Y-m-d H:i:s");

echo "<h2>MySQL Date and Time Functions in PHP</h2>";
echo "<table border='1' cellpadding='5'>";

echo "<tr><td><b>NOW()</b></td><td>$now</td></tr>";
echo "<tr><td><b>HOUR()</b></td><td>" . date("H") . "</td></tr>";
echo "<tr><td><b>MINUTE()</b></td><td>" . date("i") . "</td></tr>";
echo "<tr><td><b>SECOND()</b></td><td>" . date("s") . "</td></tr>";
echo "<tr><td><b>DATE_FORMAT()</b></td><td>" . date("d-m-Y H:i:s") . "</td></tr>";

echo "<tr><td><b>DATE_ADD(+10 days)</b></td><td>" . date("Y-m-d H:i:s", strtotime("+10 days")) . "</td></tr>";
echo "<tr><td><b>DATE_SUB(-5 days)</b></td><td>" . date("Y-m-d H:i:s", strtotime("-5 days")) . "</td></tr>";

echo "<tr><td><b>CURDATE() / CURRENT_DATE()</b></td><td>" . date("Y-m-d") . "</td></tr>";
echo "<tr><td><b>CURTIME() / CURRENT_TIME()</b></td><td>" . date("H:i:s") . "</td></tr>";

$unix = time();
echo "<tr><td><b>UNIX_TIMESTAMP()</b></td><td>$unix</td></tr>";
echo "<tr><td><b>FROM_UNIXTIME()</b></td><td>" . date("Y-m-d H:i:s", $unix) . "</td></tr>";

echo "</table>";
?>



