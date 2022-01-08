<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        NAME: <input type="text" name="fname">
        <br>
        <input type="submit" name="btn">

    </form>
    
<?php
    if(isset($_POST["btn"]))
    {
        echo "<h1>HI".$_POST["fname"];
    }
?>

</body>
</html>
