<!DOCTYPE html>
<html>
    <head>
        <title>
            Self-Study Task 2: File upload demo
        </title>
    </head>
    <body>
        <h1>Self-Study Task 2: File upload demo</h1>
        <form action="selfStudyTask2.php" method="POST" enctype="multipart/form-data">
            <label for="file">Select a file:</label>
            <input type="file" name="uploaded"><br>
            <input type="submit" name="filesubmit" value="Upload">
        </form>
        <?php
            $dest = "./uploads/";
            $dest_file = $dest.basename($_FILES['uploaded']['name']);
            if (is_uploaded_file($_FILES['uploaded']['tmp_name'])) {
                echo "The file".basename($_FILES['uploaded']['name'])." has been uploaded";
            } else {
                echo "Error, please try again!";
            }
        ?>
    </body>    
</html>
