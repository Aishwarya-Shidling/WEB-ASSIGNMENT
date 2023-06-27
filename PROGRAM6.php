<?php
// File to store visitor count
$file = "visitor_count.txt";

// Read the current count from the file
$currentCount = (file_exists($file)) ? file_get_contents($file) : 0;

// Increment the count
$currentCount++;

// Update the count in the file
file_put_contents($file, $currentCount);

// Display the visitor count with proper headings
echo "<h1>Welcome to My Website</h1>";
echo "<h2>Visitor Count:</h2>";
echo "<p>Total visitors: $currentCount</p>";
?>
