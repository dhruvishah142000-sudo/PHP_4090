<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Get and clean the input
    $rawComment = $_POST['nm'];
    $cleanedComment = trim($rawComment); // Remove extra spaces
    $lowerComment = strtolower($cleanedComment); // Convert to lowercase

    // Step 2: Define banned words
    $bannedWords = ['spam', 'hack', 'scam', 'malware'];

    // Step 3: Check for banned words
    $isFlagged = false;
    foreach ($bannedWords as $word) {
        if (strpos($lowerComment, $word) !== false) {
            $isFlagged = true;
            break;
        }
    }

    // Step 4: Safely display the comment
    $safeComment = htmlspecialchars($cleanedComment);

    echo "<h3>Moderated Comment:</h3>";
    echo "<p>$safeComment</p>";

    // Step 5: Show moderation result
    if ($isFlagged) {
        echo "<p style='color:red;'>⚠️ This comment contains inappropriate content and has been flagged.</p>";
    } else {
        echo "<p style='color:green;'>✅ This comment is clean.</p>";
    }
}





?>
