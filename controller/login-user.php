<?php
require_once(__DIR__ . "/model/config.php");
//We input the filter to sanitize the username
//We input the filter to sanitize the password
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$passwoed = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
//This num_rows will tell us how many rows were retrieved from database
if($query->num_rows == 1) {
    $row = $query->fetch_array();

    if($row["password"] === crypt($password, $row["salt"])) {
        $_SESSION["authenticated"] = true;
        echo "<p>Login Successful!</p>";
    }
    else {
        echo "<p>Invalid username and password</p>";
    }
}
else{
    echo "<p>Invalid username and password</p>";
}