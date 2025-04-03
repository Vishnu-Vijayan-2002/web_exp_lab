<?php
// Store student names in an array
$students = ["Ronaldo", "messi", "ozil", "Mbappe", "Rooney", "Hazard"];

// Display the original array
echo "<b>Original Array:</b><br>";
print_r($students);
echo "<br><br>";

//  Sort in Ascending Order and Display
asort($students);
echo "<b>Sorted in Ascending Order (asort):</b><br>";
print_r($students);
echo "<br><br>";

// Sort in Descending Order and Display
arsort($students);
echo "<b>Sorted in Descending Order (arsort):</b><br>";
print_r($students);
?>
