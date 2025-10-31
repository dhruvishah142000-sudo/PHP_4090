<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e9ecf0;
            margin: 0;
            padding: 0;
        }

        /* Banner Header */
        .banner {
            background-color: #007BFF;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        /* Centering the card */
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px); /* Adjust for banner height */
        }

        /* Card-style login container */
        .login-card {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Banner Header -->
    <div class="banner">Welcome to Secure Login Portal</div>

    <!-- Card Wrapper -->
    <div class="wrapper">
        <div class="login-card">
        <h2>User Login</h2>
    <form action = "one.php" method="POST">
        <input type="text" name="uname" placeholder="Username" required><br><br>
        <input type="password" name="pwd" placeholder="Password" required><br><br>
        <input type="submit" value="Login">
    </form>
        </div>
    </div>

</body>
</html>
