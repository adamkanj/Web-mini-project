<?php

$un = $_POST["username"];      //define variable $un and assign the username sent from the form
$pass = $_POST["password"];

$a_users = array("john.doe", "jane.doe", "johnny.doe");
$a_pass = array("password1", "password2", "password3");

$loggedIn = false;
for ($i = 0; $i < sizeof($a_users); $i++) {
    if (($un == $a_users[$i]) && ($pass == $a_pass[$i])) {
        $loggedIn = true;
        break;
    }
}

if ($loggedIn) {
    session_start();
    $_SESSION["username"] = $un;
    header("location:../Pages/Home.php");
} else {
    header("location:../index.php");
}
