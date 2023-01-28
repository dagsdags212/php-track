<?php 
    session_start();
    function init($method, $session) {
        $_POST["first_name"] = $_SESSION["first_name"];
        $_POST["last_name"] = $_SESSION["last_name"];
        $_POST["email"] = $_SESSION["email"];
        $_POST["date"] = $_SESSION["date"];
        $_POST["issue_title"] = $_SESSION["issue_title"];
        $_POST["issue_details"] = $_SESSION["issue_details"];
        $_POST["screenshot"] = $_SESSION["screenshot"];
        return $session;
    }
?>