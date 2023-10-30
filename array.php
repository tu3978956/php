<form action="array.php" method="GET">
    <input type="text" name="name">
    <input type="submit">
</form>



<?php
    //$family array("Nour", "Majed", "Anas");
    //Associative Array
    $name = $_GET["name"];
    $score = [
        "nour" => ["Score" => "90", "Grade" => "A"],
        "maged" => ["Score" => "50", "Grade" => "B"],
        "anas" => ["Score" => "80", "Grade" => "C"],
    ];
    
    
    echo "Score:" .$score[$name]["Score"];
?>








<?php
    // $family = array("Father", "Mother", "Brother");
    // $family[1] = "Love";
    // $family[3] = "Sister";
    // //echo $family[1];
    // //echo $family[3];
    // echo count($family);
?>