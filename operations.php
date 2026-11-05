<?php
$part1 = "Coding in ";
$part2 = "php programming";
$fullText = $part1 . $part2;
echo "1. Combined Text: " . $fullText . "<br>";

$upperText = strtoupper($fullText);
echo "2. Uppercase Text: " . $upperText . "<br>";

$length = strlen($upperText);
echo "3. Total Characters: " . $length . "<br>";

$position = strpos($upperText, "PHP");
echo "4. Position of 'PHP': " . $position . "<br>";


$extractedWord = substr($upperText, 10, 11);
echo "5. Extracted Word: " . $extractedWord . "<br>";
?>