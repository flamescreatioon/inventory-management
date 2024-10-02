<?php

include 'config.php';

$product_id = $_GET['id'];
$result = $conn -> query("SELECT * FROM products WHERE id = $product_id");
$product = $result -> fetch_assoc();

?>

<form action="update_product.php" method="POST">
    <input type="hidden" name="id" value ="<?php echo $product['id']; ?>">
    <input type="text" name="name" value ="<?php echo $product['name']; ?>">
    <input type="text" name="description" value ="<?php echo $product['description']; ?>">
    <input type="number" name="quantity" value ="<?php echo $product['quantity']; ?>">
    <input type="number" name="price" value ="<?php echo $product['price']; ?>">

    <button type="submit">Update Product</button>
</form>