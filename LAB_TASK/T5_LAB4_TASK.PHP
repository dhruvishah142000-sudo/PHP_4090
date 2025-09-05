<!-- 
Lab 4: CSV Parsing for Batch Evaluation
Functions Used: explode(), implode()
Objective:
Parse and reformat student scores from a CSV string.
Tasks:
 Input: &quot;Hardik,85,90,78&quot;
 Use explode() to split the string into an array.
 Calculate average score.
 Use implode() to create a summary string: &quot;Hardik - Avg: 84.33&quot;
 Display formatted output for multiple students.-->

<html>
    <head></head>
<title>User Info.</title>
<body>
<form action="Lab4.php" method="post">
        Name : <input type="text" name="nm"></br></br>
        DS :<input type="number" name="ds"></br></br>
        JAVA :<input type="number" name="java"></br></br>
        OS :<input type="number" name="os"></br></br>
  <br><br>
        Submit :  <input type="submit" name="submit" value="Submit"></br></br>
</form>
</body>
</html>