<!DOCTYPE html>
<html>
    <head>
        <title>
            Self-Study Task 1: Sticky form demo
        </title>
    </head>
    <body>
        <?php
            $username = "";
            $userEmail = "";
            $userPassword = "";
            $userPasswordConfirm = "";

            if (isset($_POST['username']) && $_POST['username'] != "" && strlen($_POST['username']) > 5 && strlen($_POST['username']) < 12) {
                $username = $_POST['username'];
            } elseif (strlen($_POST['username']) < 5 && strlen($_POST['username']) > 12){
                echo "<p>Please enter a username that is between 5 and 12 characters</p>";
            }

            if(isset($_POST['userEmail']) && $_POST['userEmail'] != "") {
                $userEmail = $_POST['userEmail'];
            } elseif (empty($_POST['userEmail'])){ 
                
            } else {
                echo "<p>Please enter in a valid email address</p>";
            }

            if (isset($_POST['userPassword']) && $_POST['userPassword'] != "" && strlen($_POST['userPassword']) > 5 && strlen($_POST['userPassword']) < 12) {
                $userPassword = $_POST['userPassword'];
            } elseif (strlen($_POST['userPassword']) < 5 && strlen($_POST['userPassword']) > 12) {
                echo "<p>Please enter a password that is between 5 and 12 characters</p>";
            }

            if (isset($_POST['userPasswordConfirm']) && $_POST['userPasswordConfirm'] === $userPassword) {
                $userPasswordConfirm = $_POST['userPasswordConfirm'];
            } elseif (empty($_POST['userPasswordConfirm']) && empty($_POST['userPassword'])) {
                
            } else {
                echo "<p>Passwords don't match please enter the same password</p>";
            }

            if (empty($username) && empty($userEmail) && empty($userPassword) && empty($userPasswordConfirm)) {
                
            } elseif (isset($username) && isset($userEmail) && isset($userPassword) && isset($userPasswordConfirm)) {
                echo "<p>The data is valid and can be submitted to the database, however this feature isn't included in this demo.</p>";
            }
        ?>
        <h1>Self-Study Task 1: Sticky form demo</h1>
        <section id="loginForm">
            <div>
                <form action="selfStudyTask1.php" method="POST">
                    <label>Enter your username:</label>
                    <input type="text" name="username" value="<?php echo $username; ?>"><br>
                    <label>Enter your email address:</label>
                    <input type="email" name="userEmail" value="<?php echo $userEmail; ?>"><br>
                    <label>Enter your password:</label>
                    <input type="password" name="userPassword" value="<?php echo $userPassword; ?>"><br>
                    <label>Confirm your password:</label>
                    <input type="password" name="userPasswordConfirm" value="<?php echo $userPasswordConfirm; ?>"><br>
                    <input type="submit" name="userLogin" value="login">
                </form>
            </div>
        </section>        
    </body>    
</html>
