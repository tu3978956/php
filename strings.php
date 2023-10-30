<?php

$string = "Nour Homsi";
echo $string;
echo "<br>";
echo strtolower ($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strlen($string);
echo "<br>";

echo $string[5];
echo "<br>";


$string[7] = "n";
echo "<br>";
echo $string;

echo "<br>";
echo str_replace("Nour", "Majed", $string);

echo "<br>";
echo substr($string, 5, 4);
echo "<br>";
echo $string;
?>