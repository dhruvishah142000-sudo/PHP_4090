<!--Lab 1: User Input Sanitization for Web Forms
Functions Used: trim(), strtolower(), htmlspecialchars()
Objective:
Clean and secure user-submitted data from a contact form before storing it in a database.
Tasks:
 Accept name, email, and message via $_POST.
 Use trim() to remove unwanted whitespace.
 Convert email to lowercase using strtolower().
 Use htmlspecialchars() to prevent XSS attacks in the message field.
 Display the sanitized output.-->

<html>
    <head></head>
<title>User Info.</title>
<body>
<form action="Lab1.php" method="post">
        Name : <input type="text" name="nm"></br></br>
        Email :<input type="email" name="mail"></br></br>
        Message : <textarea name="msg" rows="5" cols="40"></textarea><br><br>
        Submit :  <input type="submit" name="submit" value="Submit"></br></br>
</form>
</body>
</html>