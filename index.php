<link type="text/css" rel="stylesheet" href="css/custom-style.css">
<!-- start navmenu --> 
<body>
<ul class="nav nav-pills">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a title="Register/Login" href="login.php">Register/Login</a></li>
</ul>  
<!-- end navmenu -->
</body>
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

<div align="center" style="z-index:9;visibility:visible;"><a href="http://www.totallyfreecursors.com/" target="_blank" class="tfc"></a></div><style>HTML,BODY{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/fireorange.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/fireorange.gif"), auto;}</style>*/