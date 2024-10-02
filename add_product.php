<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products(name, description, quantity, price) VALUES($name, $description, $quantity, $price)";

    if($conn ->query($sql)===TRUE){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<form action="add_product.php" method="post">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="text" name="description" placeholder="Description">
            <input type="number" name="quantity" placeholder="Quantity required">
            <input type="number" name="price" placeholder="Price" required>


            <select name="category_id" id="">
            <?php
            $categories = $conn -> query("SELECT *FROM categories");
            while($row = $categories->fetch_assoc()){
                echo "<option value ='{$row['id']}'>{$row['name']}</option>";
            }
            ?>
        </select>

        <select name="supplier_id">
            <?php
            $suppliers = $conn->query("SELECT * FROM suppliers");
            while ($row = $suppliers ->fetch_assoc()){
                echo "<option value ='{$row['id']}'>{$row['name']}</option>";
            }
            ?>
        </select>


            <button type="submit">Add Product</button>
        </form>
    </div>