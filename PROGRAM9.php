<?php
$states = "Mississippi Alabama Texas Massachusetts Kansas";

$statesList = [];

// Search for a word that ends in "xas"
if (preg_match('/\b\w*xas\b/i', $states, $matches)) {
    $statesList[0] = $matches[0];
}

// Search for a word that begins with "k" and ends with "s" (case-insensitive)
if (preg_match('/\b[kK]\w*s\b/', $states, $matches)) {
    $statesList[1] = $matches[0];
}

// Search for a word that begins with "M" and ends with "s"
if (preg_match('/\bM\w*s\b/', $states, $matches)) {
    $statesList[2] = $matches[0];
}

// Search for a word that ends with "a"
if (preg_match('/\b\w*a\b/', $states, $matches)) {
    $statesList[3] = $matches[0];
}

// Display the elements of the statesList
echo "<h1>States List</h1>";
echo "statesList[0]: " . $statesList[0] . "<br>";
echo "statesList[1]: " . $statesList[1] . "<br>";
echo "statesList[2]: " . $statesList[2] . "<br>";
echo "statesList[3]: " . $statesList[3] . "<br>";
?>
