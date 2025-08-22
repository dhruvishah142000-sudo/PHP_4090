

<html>

<head>

</head>
<body>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age"><br><br>

    <button type="submit">Submit</button>
</form>

<body>
    </html>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $user_data=[
        "name"=>$_POST["name"],
        "age"=>$_POST["age"],
        "email"=>$_POST["email"]
      
    ];
    
    print_r($user_data);
    
}

?>






