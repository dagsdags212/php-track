<?php 
    session_start();
    
    function prompt($method, $session, $min, $max) {
        $value = rand($min, $max);
        $session["results"][] = ($value > 0) ? "win" : "loss";
        $session["datetime"] = date("m/d/Y h:iA");
        $session["balance"] += $value;
        $session["chances"]--;
        $session["message"] = "[ " . $session["datetime"] . " ]". " You pushed '" . $method["bet"] . " Risk'." . " Value is " . $value . ". Your current money now is " . $session["balance"] . " with " . $session["chances"] . " chance(s) left.";
        $session["messages"][] = $session["message"];
        header("Location: index.php");
        return $session;
    }

    function init() {
        if(!isset($_SESSION["balance"])) {
            $_SESSION["balance"] = 500;
        }
        if(!isset($_SESSION["chances"])) {
            $_SESSION["chances"] = 10;
        }
        $_SESSION["datetime"] = date("m/d/Y h:iA");
    }
?>