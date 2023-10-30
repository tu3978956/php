
<?php

function add($x, $y){

    return $x + $y;
}
 echo add(15, 10);
echo "<br>";

function hello($x){ 

    $user = $x; 
    if($user === "Nour"){
        echo "Hello " . $user;
    }else{
        echo "Bye " . $user;
    }

}

hello("Nour")
?>

