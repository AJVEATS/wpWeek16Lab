<!DOCTYPE html>
<html>
    <head>
        <title>
            Simple recursion exercise
        </title>
    </head>
    <body>
        <h1>Simple recursion exercise</h1>
        <?php
           function simpleRecursion($n) {
               if ($n==0) {
                   return 1;
               }
               $result = ($n * simpleRecursion($n-1));
               return $result;
            }
            echo "<p>The value of multiplying all values from 1 to 10 is: ".simpleRecursion(10); 
        ?>
    </body>    
</html>