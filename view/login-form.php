<!--We want to access our path file which is in our config.php-->
<?php
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "contoller/login-user.php" ?>">

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