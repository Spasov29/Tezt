<?php
session_start();
require_once "/opt/lampp/htdocs/project-example/core/Authentication.php";

if (!empty($_POST) && isset($_POST["username"]) && !empty($_POST["username"])) {
    // echo "Your username is ".$_POST["username"];
} else {
    echo "Username is not set yet!";
}

if (!empty($_POST) && isset($_POST["password"]) && !empty($_POST["password"])) {
    //echo "<br>Your password is ".$_POST["password"];
} else {
    echo "Password is not set yet!";
}

$username = $_POST["username"];

$password = $_POST["password"];
$hashedPassword = hash("sha512", $password);

$auth = new Authentication();
$auth->login($username, $hashedPassword);