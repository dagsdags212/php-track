<?php require("scraper.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Samson - Spiderbot</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <table>
            <tr>
                <th>Page Title</th>
                <th>Link</th>
            </tr>
<?php   foreach($items as $item) { ?>
            <tr>
<?php       foreach($item as $key => $value) { ?>
                <td><?=$value?></td>
<?php           }?>
            </tr>
<?php       }?>       
        </table>
    </body>
</html>