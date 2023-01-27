<?php 
    require("functions.php");
    session_start();

    if($_SESSION["chances"] > 0) {
        switch($_POST["bet"]) {
            case "Low":
                $_SESSION = prompt($_POST, $_SESSION, -25, 100);
                break;
            case "Moderate":
                $_SESSION = prompt($_POST, $_SESSION, -100, 1000);
                break;
            case "High":
                $_SESSION = prompt($_POST, $_SESSION, -500, 2500);
                break;
            case "Severe":
                $_SESSION = prompt($_POST, $_SESSION, -3000, 5000);
                break;
            default:
                break;
        }
    } else {
        header("Location: index.php");
    }
?>