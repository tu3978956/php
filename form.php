
<!-- <form action="form.php" method="get"> -->
<form action="form.php" method="POST">
    Name: <input type="text" name="fname">
    <br>
    Last: <input type="text" name="lname">
    <br>
    <input type="submit" >
</form>
<?php
    echo $_REQUEST["fname"];
    echo $_REQUEST["lname"];
?>