<?php 
session_start();
?>
<html>
    <head>
    <title>Exercise 6 - Sessions</title>
    </head>
    <body>
        <?php
            if(!empty($_POST)) {
                if(!isset($_SESSION['loggedIn'])) {
                    if(!empty($_POST['password'] && $_POST['password'] != "")) {
                        $password = trim($_POST['password']);
                        if($password == "SD208") {
                            $_SESSION['loggedIn'] = "ok";
                        } else { ?>
                            <h1>Invalid Login!. Go <a href="exercise6_answer.php">back</a></h1>
                        <?php }
                    }
                } elseif($_SESSION['loggedIn'] == "ok") { ?>
                    <h1>Logged In!</h1>
                <?php } else { ?>
                    <h1>You are not authorized to go here. Go <a href="exercise6_answer.php">back</a></h1>
                <?php }} else {
        ?>
            <p>Login</p>
            <form method="post" action="exercise6_answer.php">
            <i>Enter Password</i>
            <input type="password" name="password"/>
            <input type="submit" value="Enter!"/>
            </form>
    <?php } ?>
    </body>
</html>