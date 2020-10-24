<!DOCTYPE html>
<html>
    <head>
        <title>
            Getting content from a URL using the GET method
        </title>
    </head>
    <body>
        <h1>Getting content from a URl using the GET method</h1>
        <p>Click here for: <a href="?level=4">Level 4</a></p>
        <p>Click here for: <a href="?level=5">Level 5</a></p>
        <p>Click here for: <a href="?level=6">Level 6</a></p>
        <?php
            $input = $_GET['level'];
            if (isset($input)) {
                echo "<p>You have selected level $input</p>";
            } elseif (empty($input)) {
                echo "<p>Please select a level</p>";
            }
        ?>
    </body>    
</html>