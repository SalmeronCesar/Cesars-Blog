<?php
require_once(__DIR__ . "/../model/config.php");

function authenticateUser() {
    if(!isset($_SESSION["authenticated"])) {
        return false;
    }
    else {
        if($_SESSION["authenticated"] != true) {
            return false;
        }  
        else{
            return true;
        }
    }
}
////<?php $_Session_start(); include 'config.php';
//$username = $_Post['username'];
//$password = $_Post['password'];
//if ($username && $password)
//{
//$query = mysql_query("SELECT * FROM users WHERE username='$username' ");
//$numrows = mysql_num_rows($query);
//    if (!$numrows==0)
//    {
//        while ($row = mysql_fetch_assoc($query))
//        {
//            $username1 = $row["username"];
//            $password1 = $row["password"];
//            $title = $row['title']; //The user's title.
//            $facility = $row['facility']; //The facility that the user belongs to.
//        }
//            if ($username1==$username&&$password1==$password) //check to see if username and password match
//            {
//                $_SESSION['username'] = $username;
//                $_SESSION['title'] = $title;
//                $_SESSION['facility'] = $facility;
//                header("Location: index.php"); //message(1): Welcome, <username>!
//            }
//                else
//                    header("Location: login.php?error=2"); //error(2): Incorrect username or password.
//                }
//        else
//            header("Location: login.php?error=1"); //error(1): Incorrect username or password.
//}
//else{
//    header("Location: login.php?error=3"); //error(3): Please enter a username AND password!
//    exit("You are being redirected");
//}
//?>
//
