<?php

if($_SERVER ["REQUEST_METHOD"]== "POST")
{
    $EMAIL=$_POST['mail'];

    //Clean the input using trim().
    $trimmail=trim($EMAIL);

    //Concatenate the email with a timestamp.
    $clean=$trimmail.time();

    //Generate MD5 hash of the concatenated string
    $token=md5($clean);

    // Display the token
    echo "Display Token  :  ".$token;

}

?>