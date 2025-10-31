<!-- 2.1 Write a PHP code to create numeric array for Monday to Saturday, associative array
for month with total days of month such as January=>30,February=>28 upto
December and multidimensional array for laptop along with company name inside that
model and price(any two companies).-->

<?php

$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

$months = array(
    "January" => 30,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

$laptops = array(
    "Dell" => array(
        "model" => "Inspiron 15",
        "price" => 55000
    ),
    "HP" => array(
        "model" => "Pavilion x360",
        "price" => 62000
    )
);

echo "Days:\n";
print_r($days);
echo "<br><br>";

echo "\nMonths and Days:\n";
print_r($months);
echo "<br><br>";

echo "\nLaptop Details:\n";
print_r($laptops);
echo "<br><br>";

?>





