<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Samson - Bingo</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>

    <body>
        <table>
            <tr>
                <?php
                    $title = array("B", "I", "N", "G", "O");
                    foreach($title as $letter){
                        echo "<th>$letter</th>";
                    }
                ?>
            </tr>
            <?php
                $initial_value = 2; 
                for($row=$initial_value; $row<=6; $row++){
                    if($row%2 == 0){
                        echo "<tr class='even'>";
                    } else {
                        echo "<tr>";
                    }
                    for($col=$initial_value; $col<=$initial_value*5; $col+=$initial_value){
                        echo "<td>{$col}</td>";
                    }
                    $initial_value++;
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>