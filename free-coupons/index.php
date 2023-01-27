<?php 
    session_start();
    if(!isset($_SESSION["remaining_coupons"])) {
        $_SESSION["remaining_coupons"] = 10;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Free Coupons</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Welcome Customer!</h1>
        <p>We're giving away <span>free coupons</span></p>
        <p>as a token of appreciation</p>
        <p>for the first <?= $_SESSION["remaining_coupons"]; ?> customer(s)</p>

        <form action="process.php" method="POST">
            <label for="name">Kindly type your name:</label>
            <input type="text" name="name" id="name">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>