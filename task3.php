<!DOCTYPE html>
<html>
    <head>
        <title>
            Sending user inputs via a HTML form using the POST method
        </title>
    </head>
    <body>
        <h1>Sending user inputs via a HTML form using the POST method</h1>
        <div>
            <form action="task3.php" method="POST">
                <label>Input your name:</label>
                <input type="text" name="username">
                <input type="submit" name="submitButton" value="submit">
            </form>
        </div>
        <?php
            $user = $_POST['username'];
            if (isset($_POST['submitButton'])){
                echo "<p>Welcome, $user!</p>";
            }elseif (empty($user)){
                echo "<p>Please enter in your name</p>";
            }
        ?>
    </body>    
</html>