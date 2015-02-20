<?php
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/controller/login-verify.php");

if(authenticateUser()) {
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
            <!--Here we create a button to submit.-->
            <button type="submit">Submit</button>
        </div>
</form>