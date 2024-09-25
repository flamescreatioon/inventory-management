<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/">
</head>
<body>
    <div class="container">
        <h1>Management System</h1>
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
</body>
</html>