<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bug Ticket</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Report a Bug!</h1>
<?php if(isset($_SESSION["errors"])) {
        foreach($_SESSION["errors"] as $error) { ?>
        <p><?= $error ?></p>
<?php       }  
        } ?>
        <form action="process.php" method="POST">
            <label> First Name: 
                <input type="text" name="first_name" require>
            </label>
            <label> Last Name: 
                <input type="text" name="last_name" require>
            </label>
            <label> Email: 
                <input type="email" name="email">
            </label>
            <label>
                <input type="date" name="date" require>
            </label>
            <label> Issue Title: 
                <input type="text" name="issue_title" require>
            </label>
            <label> Issue Details: 
                <textarea name="issue_details" id="" cols="30" rows="10"></textarea>
            </label>
            <label> Screenshot: 
                <input type="file" name="screenshot" accept="image/png, image/jpeg, image/jpg" enctype="multipart/form-data">
            </label>
            <input type="submit" name="Submit!" id="submit">
        </form>
    </body>
</html>
<?php session_destroy(); ?>