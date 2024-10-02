<?php

include 'config.php';


$result = $conn -> query("SELECT p.*, c.name AS category_name, s.name AS supplier_name from products p
LEFT JOIN categories c ON p.category_id = c.id
LEFT JOIN suppliers s ON p.supplier_id = s.id");

echo "<table>";
echo "<tr><th>Name</th><th>Description</th><th>Quantity</th><th>Price</th><th>Category</th><th>Supplier</th><th><th>Actions</th></tr>";

while ($row = $result -> fetch_assoc()){
    echo "
    <tr>
    <td>{$row['name']}</td>
    <td>{$row['description']}</td>
    <td>{$row['quantity']}</td>
    <td>{$row['price']}</td>
    <td>{$row['category_name']}</td>
    <td>{$row['supplier_name']}</td>
    <td>
    <a href='edit_product.php?id={$row['id']}'>Edit</a>
    <a href='delete_product.php?id={$row['id']}'>Delete</a>
    </td>
    </tr>
    ";
}

echo "</table>";
?>