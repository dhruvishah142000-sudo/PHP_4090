<?php
// Step 1: Set the future event date
$eventDate = new DateTime("2026-07-30"); 

// Step 2: Get today's date
$currentDate = new DateTime(); // Automatically gets current date and time

// Step 3: Calculate the difference
$interval = $currentDate->diff($eventDate);

// Step 4: Display the result
echo "<h2>🎉 Event Countdown</h2>";
echo "The event is on: " . $eventDate->format("l, F j, Y") . "<br>";
echo "Your Birthday's Remaining Days : <strong>" . $interval->days . "</strong> days";
?>
