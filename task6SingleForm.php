<!DOCTYPE html>
<html>
<head>
    <title>
        Product management console basics
    </title>
</head>
<body>
    <h1>Product management console basics</h1>
    <section id="addProduct">
        <div>
            <h2>Add a new product or edit a product from the catalogue</h2>
            <form action="task6SingleForm.php" method="POST">
                <label>Enter product's name:<label>
                <input type="text" name="productName"><br>
                <label>Enter product's description:<label>
                <input type="text" name="productDescription"><br>
                <label>Enter product's price:<label>
                <input type="text" name="productPrice"><br>
                <label>Enter product's cost price</label>
                <input type="text" name="productCostPrice"><br>
                <input type="submit" name="addSubmit" value="Add product">
                <input type="submit" name="updateSubmit" value="Edit product">
            </form>
        </div>
        <?php
            if (isset($_POST['addSubmit'])) {
                $productName = $_POST['productName'];
                $productDescription = $_POST['productDescription'];
                $productPrice = $_POST['productPrice'];
                $productCostPrice = $_POST['productCostPrice'];

                echo "<h3>The product '$productName' has been added to the product catalogue.</h3>
                <h3>The product are:</h3>
                <ul>
                    <li>Name: $productName</li>
                    <li>Description: $productDescription</li>
                    <li>Price: $productPrice</li>
                    <li>Cost price: $productCostPrice</li>
                </ul>";
            } 

            if (isset($_POST['updateSubmit'])) {
                $editProductName = $_POST['productName'];
                $editProductDescription = $_POST['productDescription'];
                $editProductPrice = $_POST['productPrice'];
                $editProductCostPrice = $_POST['productCostPrice'];

                echo "<h3>The product '$editProductName' has been updated in the product catalogue.</h3>
                <h3>The new product detail are:</h3>
                <ul>
                    <li>Name: $editProductName</li>
                    <li>Description: $editProductDescription</li>
                    <li>Price: $editProductPrice</li>
                    <li>Cost Price: $editproductCostPrice</li>
                </ul>";
            }
        ?>
        <section id="deleteProduct">
        <div>
            <h2>Delete a product</h2>
            <h3>Click on the product that you want to delete</h3>
        </div>
        <?php
            $productCatalogue = array(
                array("Wholemeal bread","A sliced loaf of wholemeal bread","£00.50","£0.20"),
                array("Baguette","A stick loaf baguette","£01.00","£00.75"),
                array("Tiger bread","An unsliced loaf of tiger bread","£00.75","£00.50"),
                array("Pita Bread","A flat piece of bread popular in countries like Greece and Turkey","£01.50","£01.00"),
                array("Banana Bread","Monkey's favourite bread","£01.00","£00.90")
            );
            for ($row = 0; $row < 5; $row++) {
                $index = $row + 1;
                echo "<ul>
                        <li>Name: ".$productCatalogue[$row][0]."</li>
                        <li>Description: ".$productCatalogue[$row][1]."</li>
                        <li>Price: ".$productCatalogue[$row][2]."</li>
                        <li>Cost price: ".$productCatalogue[$row][3]."</li>
                        <li><a href='?mode=delete&id=$index'>Delete ".$productCatalogue[$row][0]."</a></li>
                    </ul>";
            }
        ?>
    </section>
    </body>
</html>