<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Samson - Excel to HTML</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <table>
    <?php 
        ini_set("auto_detect_line_endings", true);
        $path = "us-500.csv";
        $handle = fopen($path, "r");
        $counter = 0;
        while (($row = fgetcsv($handle)) !== false) { 
            if ($counter % 10 == 0 && $counter != 0) { ?>
            <tr class="highlight">
<?php       } elseif ($counter == 0) { ?>
            <tr class="heading">
<?php       } else { ?>
            <tr>
<?php       }
            foreach($row as $idx => $value){ ?>
                <td><?= $value ?></td>
<?php       } ?> 
            <tr>
<?php       $counter++;
            }
        fclose($handle); ?>
        </table>
    </body>
</html>

