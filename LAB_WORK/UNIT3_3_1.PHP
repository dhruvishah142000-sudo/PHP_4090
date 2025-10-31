<?php

// 3.1 create cookie

setcookie("user", "DHRUVI", time() + (60 * 5)); // expires in 5 minutes

// Check if cookie is set
if (isset($_COOKIE["user"]))
{
    echo "Cookie 'user' is already set!<br>";
    echo "Value is: " . $_COOKIE["user"];
} 
else
{
    echo "Cookie named 'user' is not set yet. Refresh the page to see it.";
}

?>


