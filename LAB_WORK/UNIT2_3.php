<!DOCTYPE html>
<html>
<head>
    <title>Survey Data Analysis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .survey-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .result {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="survey-box">
    <h2>📋 Rate Our Service</h2>
    <form method="POST">
        <label for="rating">Your Rating (1–5):</label>
        <select name="rating" required>
            <option value="">--Select--</option>
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
    
    // Initialize or retrieve responses
    session_start();
    if (!isset($_SESSION['responses'])) {
        $_SESSION['responses'] = [];
    }

    // Function to calculate average
    function calculateAverage($responses) {
        $total = array_sum($responses);
        $count = count($responses);
        return $count > 0 ? round($total / $count, 2) : 0;
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rating"])) {
        $rating = (int)$_POST["rating"];
        $_SESSION['responses'][] = $rating;

        echo "<div class='result'>✅ Thank you for rating!</div>";
        echo "<div class='result'>Average Score: " . calculateAverage($_SESSION['responses']) . "</div>";
        echo "<div class='result'>Total Responses: " . count($_SESSION['responses']) . "</div>";
    }
    ?>
</div>

</body>
</html>
