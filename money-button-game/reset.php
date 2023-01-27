<?php 
    session_start();
    if($_POST["action"] == "Reset Game") {
        $_SESSION["balance"] = 500;
        $_SESSION["chances"] = 10;
        $_SESSION["messages"] = array();
        $_SESSION["results"] = array();
        header("Location: index.php");
    }
?>