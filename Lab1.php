<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name=$_POST['nm'];
    $email=$_POST['mail'];
    $message=$_POST['msg'];


 // Use trim() to remove unwanted whitespace.
 $trimspace=trim($name);
 echo "NAME : ".$name."<br><br>";

 // Convert email to lowercase using strtolower().
 $lower=strtolower($email);
 echo "EMAIL : ".$email."<br><br>";

  // Use htmlspecialchars() 
  $special=htmlspecialchars($message);
  echo "MESSAGE : ".$message."<br><br>";
}
  ?>


