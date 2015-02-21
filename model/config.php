<?php

require_once(__DIR__ . "/database.php");
session_start();
//Here we regenerate the session when going to another page on the same website
session_regenerate_id(true);

$path = "/Cesars-Blog/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";
//Here is checking if the SESSION is set or not.
if(!isset($_SESSION["conection"])) {
    $connection = new Database($host, $username, $password, $database);
    //Here the connection is the new database so now we put in "connection" as for database.
    $_SESSION["connection"] = $connection;
}
