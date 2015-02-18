<?php

require_once(__DIR__ . "/../model/config.php");

$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
. "id int(11) NOT NULL AUTO_INCREMENT,"
. "title varchar(255) NOT NULL,"
. "post text NOT NULL,"
. "PRIMARY KEY (id))");

echo $query;
//Here we asked if the table was created or not and here it says it is created successfully.
if ($query) {
echo "<p>Successfully created table: posts</p>";
}
//This is telling us if we have an error it will appear and currently we do not have an error.
else {
echo "<p>" .$_SESSION["connection"]->error . "</p>";
}

$query = $_SESSION["connection"]->query("CREATE TABLE users("
. "id int(11) NOT NULL AUTO_INCREMENT, "
. "username varchar(30) NOT NULL,"
. "email varchar(50) NOT NULL,"
. "salt char(128) NOT NULL,"
. "PRIMARY KEY(id))");

if($query) {
echo "<p>Successfully created table: users</p>";
}

else {
     echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
