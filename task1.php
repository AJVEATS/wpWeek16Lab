<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Using multiple arguments with a function   
        </title>
    </head>
    <body>
        <h1>Using multiple arguments with a function</h1>
        <?php
            function welcomeStudent($name, $level="Level 5") {
                echo "<p>Welcome, ".$name." from ".$level."</p>";
            }
            welcomeStudent("Alexander Veats","Level 5");
        ?>
    </body>    
</html>