<?php
require_once(__DIR__ . "/../model/config.php");
//Here we input a filter to sanitize the title.
//Here we input a filter to sanitize the posts.
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//We are setting the title to title and post to posts.
$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
//This is to see if our question as in if is true or not.
if($query) {
    echo "<p>Successfully inserted post: $title</p>";
}
else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

