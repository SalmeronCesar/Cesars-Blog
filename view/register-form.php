<?php
require_once(__DIR__ . "/../model/config.php");
?>
<!--This is the 1st header or title.-->
<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php";?>">
    <div>
        <!--Here we are labeling the email sign in-->
        <label for="email">Email: </label>
        <input type="text" name="email" />
    </div>

    <div>
        <!--Here we are putting the Username text-->
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>

    <div>
        <!--Here we are putting the password login but the password will appear in "***".-->
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>
    
    <div>
        <!--Here we created a button so we can submit our Username and password for the Blog-->
        <button type="submit">Submit</button>
    </div>
</form>