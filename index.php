
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
<!--    lists: id, user_id, name
users: id, name, etc
column_types: id, type
list_headers: id, list_id, column_type_id, name
list_contents: id, list_header_id, content-->

<?php
//The time 
date_default_timezone_set("America/Los_Angeles");
echo "The time is " . date("h:i:sa");
?>
<?php
//These link are linked into the index,login-verify, navigation,create-db-read-posts, and the footer.
require_once(__DIR__ . "/view/header.php");
require_once(__DIR__ . "/controller/login-verify.php");
if(authenticateUser()) {
require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/controller/read-posts.php");
require_once(__DIR__ . "/view/footer.php");
?>
<!--This is the cursor-->
<div align="center" style="z-index:9;visibility:visible;"><a href="http://www.totallyfreecursors.com/" target="_blank" class="tfc"></a></div><style>HTML,BODY{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/fireorange.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/fireorange.gif"), auto;}</style>