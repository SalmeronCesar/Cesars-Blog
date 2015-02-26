<?php
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");
//Here if checks if the username is correct or not if not it restarts.
//Here the locations wants to move to a path which is the index.php.
//Users are now comfirmed and the path here is index.php
if(!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>
<!--this is the title or 1st header-->
<h1>Create Blog Posts</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php";?>">
    <div>
        <!--Here we label the title and input a title.-->
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>
    
    <div>
        <!--Here we label and input the posts.-->
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
        
        <div>
            <!--Here we create a button to submit and to logout.-->
            <button type="submit">Submit</button>
            <button type="logout">Log out</button>
        </div>
</form>