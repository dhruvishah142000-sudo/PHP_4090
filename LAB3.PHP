<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Fnm=$_POST['nm'];
    
    //Convert entire string to lowercase
    $lower=strtolower($Fnm);

    //using explode()
    $ex=explode(" ",$lower);

    //using ucfirst()
    foreach($ex as &$part)
    {
        $part=ucfirst($part);
    }

    //using implode()
    $im=implode(" ",$ex);

    echo "Formatted Name: ".$im;
}


?>