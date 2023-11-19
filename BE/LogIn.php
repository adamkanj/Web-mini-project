<?php

$un = $_POST["username"];      //define variable $un and assign the username sent from the form
$pass = $_POST["password"];
$usersData = file_get_contents("../Data/Users.txt");

if ($usersData !== false) {
    // Explode the file content into an array of lines
    $usersArray = explode("\n\n", $usersData);

    $loggedIn = false;

    // Iterate through each user's data
    foreach ($usersArray as $userData) {
        // Explode user data into an array of lines
        $userDataLines = explode("\n", $userData);

        // Initialize variables to store username and password
        $username = "";
        $password = "";

        // Parse each line to extract username and password
        foreach ($userDataLines as $line) {
            $lineData = explode(": ", $line);
            if ($lineData[0] === "Username") {
                $username = $lineData[1];
            } elseif ($lineData[0] === "Password") {
                $password = $lineData[1];
            }
        }

        // Check if entered credentials match
        if ($un === $username && $pass === $password) {
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
} else {
    echo "Unable to read Users.txt file!";
}
