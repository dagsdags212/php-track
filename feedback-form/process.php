<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Samson - Feedback Form</title>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
    </head>
    <body>
        <h1>Submitted Entry</h1>
        <table>
            <tr>
                <td>Your name (optional):</td>
                <td><?= $_POST["name"] ?></td>
            </tr>
            <tr>
                <td>Course Title:</td>
                <td><?= $_POST["course"] ?></td>
            </tr>
            <tr>
                <td>Given Score (1-10):</td>
                <td><?= $_POST["score"] ?></td>
            </tr>
            <tr>
                <td colspan="2">Reason:</td>
            </tr>
            <tr>
                <td colspan="2"><?= $_POST["reason"] ?></td>
            </tr>
        </table>
        <a href="./index.html"><button>Return</button></a>
    </body>
</html>