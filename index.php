<?php
// Variabes المتغيرات
$title = "learn PHP 7.4 - ";
$num = 40 ;
$float = 3.14;
$bool = true;
$nothing= NULL:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device">
    <title><?php  echo $title . "Home Page" ?></title>
</head>
<body>
    <?php 
        echo "<h1>Welcome to $title</h1>" ;
        echo "<br>";
        echo $num;
        echo "<br>";
        echo $float;
        echo "<br>";
    ?>
</body>
</html>