<?php 
    require("functions.php");
    init();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Money Button Game</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <span>Your money: <?= $_SESSION["balance"] ?></span>
        <form action="reset.php" method="POST">
            <input type="hidden" name="action" value="reset">
            <input type="submit" name="action" value="Reset Game" id="reset">
        </form>
        <p>Chances left: <?= $_SESSION["chances"] ?></p>
        <div class="container">
            <div class="bet">
                <h1>Low Risk</h1>
                <form action="process.php" method="POST">
                    <input type="hidden" name="bet" value="Low">
                    <input type="submit" name="action" value="Bet">
                </form>
                <p>by -25 up to 100</p>
            </div>
            <div class="bet">
                <h1>Moderate Risk</h1>
                <form action="process.php" method="POST">
                    <input type="hidden" name="bet" value="Moderate">
                    <input type="submit" name="action" value="Bet">
                </form>
                <p>by -100 up to 1000</p>
            </div>
            <div class="bet">
                <h1>High Risk</h1>
                <form action="process.php" method="POST">
                    <input type="hidden" name="bet" value="High">
                    <input type="submit" name="action" value="Bet">
                </form>
                <p>by -500 up to 2500</p>
            </div>
            <div class="bet">
                <h1>Severe Risk</h1>
                <form action="process.php" method="POST">
                    <input type="hidden" name="bet" value="Severe">
                    <input type="submit" name="action" value="Bet">
                </form>
                <p>by -3000 up to 5000</p>
            </div>
        </div>
        <p>Game Host:</p>
        <div class="history">
            <p>[ <?= $_SESSION["datetime"] ?> ] Welcome to Money Button Game, risk taker! All you need to do is push buttons to try your luck. You have free 10 chances with initial money 500. Choose wisely and good luck!</p>
<?php for($i=0; $i<count($_SESSION["messages"]); $i++) { ?>
        <p class=<?= $_SESSION["results"][$i] ?>><?= $_SESSION["messages"][$i] ?></p>
<?php    } ?>
        </div>
    </body>
</html> 