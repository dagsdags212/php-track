<?php
    session_start();
    
    function valid_name() {
        return !empty($_POST["name"]);
    }

    function is_available() {
        return $_SESSION["remaining_coupons"] > 0;
    }

    if (valid_name() && is_available()) {
        $_SESSION["remaining_coupons"]--;
        header("Location: discount.php");
    } elseif (valid_name() && !is_available()) {
        header("Location: unavailable.php");
    } elseif (!valid_name()) {
        header("Location: index.php");
    }

    if (isset($_POST["action"])) {
        if(($_POST["action"]) == "reset") {
            $_SESSION["remaining_coupons"] = 10;
            header("Location: index.php");
        } elseif ($_POST["action"] == "claim" && is_available()) {
            header("Location: index.php");
        } else {
            header("Location: unavailable.php");
        }
    }
?>