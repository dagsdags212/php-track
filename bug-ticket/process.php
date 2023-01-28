<?php 
    session_start();
    function init($method, $session) {
        $session["first_name"] = $method["first_name"];
        $session["last_name"] = $method["last_name"];
        $session["email"] = $method["email"];
        $session["date"] = $method["date"];
        $session["issue_title"] = $method["issue_title"];
        $session["issue_details"] = $method["issue_details"];
        $session["screenshot"] = $method["screenshot"];
        return $session;
    }
    $_SESSION = init($_POST, $_SESSION);
    $_SESSION["errors"] = array();
    // check date
    if(empty($_SESSION["date"])) {
        $_SESSION["errors"][] = "Date cannot be blank";
    } elseif ($_SESSION["date"] > date("Y-m-d")) {
        $_SESSION["errors"][] = "Invalid date";
    }

    // check first and last name
    if(empty($_SESSION["first_name"])) {
        $_SESSION["errors"][] = "First name cannot be blank";
    } elseif (is_numeric($_SESSION["first_name"])) {
        $_SESSION["errors"][] = "First name cannot contain numbers";
    }
    if(empty($_SESSION["last_name"])) {
        $_SESSION["errors"][] = "last name cannot be blank";
    } elseif (is_numeric($_SESSION["last_name"])) {
        $_SESSION["errors"][] = "last name cannot contain numbers";
    }

    // check email
    if(empty($_SESSION["email"])) {
        $_SESSION["errors"][] = "Email cannot be blank";
    } elseif(!filter_var($_SESSION["email"], FILTER_VALIDATE_EMAIL)) {
        $_SESSION["errors"][] = "Invalid email";
    }

    // check issue title
    if(empty($_SESSION["issue_title"])) {
        $_SESSION["errors"][] = "Issue title cannot be blank";
    } elseif(strlen($_SESSION["issue_title"]) > 50) {
        $_SESSION["errors"][] = "Issue title cannot exceed 50 characters";
    }
    
    // check issue details
    if(empty($_SESSION["issue_details"])) {
        $_SESSION["errors"][] = "Issue details cannot be blank";
    } elseif(strlen($_SESSION["issue_details"]) > 250) {
        $_SESSION["errors"][] = "Issue details cannot exceed 250 characters";
    }

    if (empty($_SESSION["errors"])) {
        header("Location: success.html");
    } else {
        header("Location: index.php");
    }
?>