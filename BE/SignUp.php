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
$user->email = VarExist($_POST["email"]);
$user->pass = VarExist($_POST["pass"]);
$user->sex = VarExist($_POST["sex"]);
$user->ageGroup = VarExist($_POST["ageGroup"]);
$user->language = VarExist($_POST["language"]);

InsertUserToDBfromObjet($user);

function InsertUserToDBfromObjet($user)
{
    print_r($user);
}
