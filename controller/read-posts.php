<?php

require_once(__DIR__ . "/../model/config.php");

$query = "SELECT * FROM posts";
//We can now retreive posts.
$result = $_SESSION["connection"]->query($query);
//Here we see if the results are true and we show the posts on our blog.
if($result) {
    while($row = mysqli_fetch_array($result)) {
        echo "<div> ";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<br />";
        echo "<p>" . $row['post'] . "</p>";
        echo "<br />";
        echo "</div>";
    }
}