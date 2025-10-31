<!-- 2.2 Write a PHP code for sorting an array entered by user. -->

<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>
    <h2>Enter numbers separated by commas:</h2>
    <form method="post">
        <input type="text" name="user_array">
        <input type="submit" value="Sort">
    </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["user_array"];
    
    print_r($input);
    sort($input);
}

?>

</body>
</html>






