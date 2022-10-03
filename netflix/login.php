<?php
    if(isset($_POST["submitButton"])){
        phpversion();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to netflix</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css"/>
    </head>
    <body>
        <div class="signInContainer">
            <div class="column">
                <div class="header">
                    <img src="assets/images/logo.png" title="Logo" alt="Site logo">
                    <h3>Sign In</h3>
                    <span>to continue to netflix</span>
                </div>

                <form method="POST">
                    <input type="text" name="userName" placeholder="UserName">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="submitButton" value="submit">
                </form>

                <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>
            </div>
        </div>
    </body>
</html>
