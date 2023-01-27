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
        <p>as token of appreciation</p>

        <div class="coupon">
            <h2>Sorry!</h2>
            <p>Unavailable</p>
            <form action="process.php" method="POST">
                <input type="hidden" name="action" value="reset">
                <input type="submit" name="reset" id="reset" value="Reset count">
            </form>
            <form action="process.php" method="POST">
                <input type="hidden" name="action" value="claim">
                <input type="submit" name="claim" id="claim" value="Claim again">
            </form>
        </div>
    </body>
</html>