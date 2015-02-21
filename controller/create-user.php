<?php
require_once(__DIR__ . "/../model/config.php");
//This inputs a filter to sanitizes our email
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//We input the filter to sanitize the username
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
//We input the filter to sanitize the password
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_EMAIL);

echo $password;
//We are telling this to create a unique id and to create random numbers to  make sure this random number is unique as possible
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$hashedPassword = crypt($password, $salt);
//This query is going to insert and set variables like email,username,passwords and the salt.
$query = $_SESSION["connection"]->query("INSERT INTO users SET "
        . "email = '$email',"
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt'");

if($query) {
    echo "Successfully created user: $username";
}

else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}