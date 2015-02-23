<link type="text/css" rel="stylesheet" href="css/custom-style.css"></link>
<img class="img-responsive img-rounded" src="http://www.flightcentre.com.au/global-images/Product_Images/New/Cruise_Website/images/Destinations/Be_Inspired/Tropical_islands/Destinations_Be_Inspired_Tropical_islands_Island3.jpg">
<!-- start navmenu --> 
<style>
                   body{ background:none; margin: 0px; }
            div#nav{padding: 24px;}
            div#nav > a{
                font-family: Ariel, Helvetica, sans-serif;
                font-size: 25px;
                background: whitesmoke;
                padding: 12px 24px;
                color: black;
                text-decoration: none;
                margin-left: 10px;
                border-radius: 3px;
            }
            div#nav > a:hover{
                background: black;
                color: whitesmoke;
            }
        </style>
            
            <div id="nav">
                <a class="active"  href="index.php">Home</a><a href="login.php">Register/Login</a>
                <!-- end navmenu -->
<?php
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/header.php");
if(authenticateUser()) {
require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/read-posts.php");
?>

<div align="center" style="z-index:9;visibility:visible;"><a href="http://www.totallyfreecursors.com/" target="_blank" class="tfc"></a></div><style>HTML,BODY{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/fireorange.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/fireorange.gif"), auto;}</style>