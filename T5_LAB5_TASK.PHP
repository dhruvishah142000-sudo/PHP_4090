<!-- Lab 5: Comment Moderation System
Functions Used: htmlspecialchars(), trim(), strtolower()
Objective:
Build a basic moderation tool for user comments.
Tasks:
 Accept a comment input.
 Use trim() to clean it.
 Convert to lowercase using strtolower() for keyword matching.
 Use htmlspecialchars() to safely display the comment.
 Flag comments containing banned words like &quot;spam&quot;, &quot;hack&quot;, etc.-->

<html>
    <head></head>
<title>User Info.</title>
<body>
<form action="Lab5.php" method="post">
        Name : <input type="comment" name="nm"></br></br>
        Submit :  <input type="submit" name="submit" value="Submit"></br></br>
</form>
</body>
</html>