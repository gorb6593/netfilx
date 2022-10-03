<?php
require_once("includes/classes/FormSanitizer.php");
    if(isset($_POST["submitButton"])){

        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email2 = FormSanitizer::sanitizeFormUsername($_POST["username"]);
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
                    <h3>Sign Up</h3>
                    <span>to continue to netflix</span>
                </div>

                <form method="POST">
                    <input type="text" name="firstName" placeholder="FirstName" required>
                    <input type="text" name="lastName" placeholder="LastName">
                    <input type="text" name="userName" placeholder="UserName">
                    <input type="email" name="email" placeholder="Email">
                    <input type="email" name="email2" placeholder="Confirm email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="password2" placeholder="Confirm Password">
                    <input type="submit" name="submitButton" value="submit">
                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
            </div>
        </div>
    </body>
</html>
