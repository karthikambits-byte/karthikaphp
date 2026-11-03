<?php
$students = ["Alice","Bob","Charlie","Diana","Eve"];
echo "Orginal array:<br>";
print_r($students);
echo "<br><br>";

asort($students);
echo "Array Sorted in Ascending Order:<br>";
print_r($students);
echo "<br><br>";

arsort($students);
echo "Array Sorted in Descending Order:<br>";
print_r($students);
?>

