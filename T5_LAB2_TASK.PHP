<!-- Lab 2: Secure Token Generation for Password Reset
Functions Used: md5(), trim()
Objective:
Generate a secure token for password reset links using user email.
Tasks:
 Accept an email input.
 Use trim() to clean the input.
 Concatenate the email with a timestamp and hash it using md5().
 Display the token and explain its use in password reset URLs.-->

<html>
    <head></head>
<title>User Info.</title>
<body>
<form action="Lab2.php" method="post">
       
        Email :<input type="email" name="mail"></br></br>
        Submit :  <input type="submit" name="submit" value="Submit"></br></br>
</form>
</body>
</html>