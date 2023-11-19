<?php

function VarExist($var)
{
    if (isset($var)) {
        return $var;
    } else {
        header("location:../index.php");
    }
}

$user = new stdClass();

$user->fn = VarExist($_POST["firstname"]);
$user->ln = VarExist($_POST["lastname"]);
$user->un = VarExist($_POST["username"]);
$user->pass = VarExist($_POST["pass"]);
$user->sex = VarExist($_POST["sex"]);
$user->bday = VarExist($_POST["birthdate"]);

InsertUserToDBfromObjet($user);


function InsertUserToDBfromObjet($user)
{
    // Open the Users.txt file in append mode
    $file = fopen("../Data/Users.txt", "a");

    if ($file) {
        // Format the user data
        $userData = "First Name: " . $user->fn . "\n" .
            "Last Name: " . $user->ln . "\n" .
            "Username: " . $user->un . "\n" .
            "Password: " . $user->pass . "\n" .
            "Sex: " . $user->sex . "\n" .
            "Birthdate: " . $user->bday . "\n\n";

        // Write user data to the file
        fwrite($file, $userData);

        // Close the file
        fclose($file);
        header("location:../index.php");
    } else {
        echo "Unable to open file!";
    }
}
