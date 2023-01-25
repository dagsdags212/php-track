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
            <h1>BINGO</h1>
<?php   $num_arr = array();
        $init = 2; 
        for($row=$init; $row<=6; $row++){
            for($col=$init; $col<=$init*5; $col+=$init){
                array_push($num_arr, $col);
                }
            $init++;
            }
    foreach($num_arr as $idx => $value){
        if($idx % 5 == 0){ ?>
            <tr>
<?php           } 
                if($idx % 2 == 0){ ?>
                <td class='c1'><?=$value?></td>
<?php           } else { ?>
                <td class='c2'><?=$value?></td>
<?php           }
        if($idx % 5 == 4){ ?>
            </tr>
<?php           } 
            } ?>
        </table>
    </body>
</html>