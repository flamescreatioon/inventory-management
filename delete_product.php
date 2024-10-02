<?php
include 'config.php';

$product_id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = $product_id";

if ($conn -> query($sql)=== TRUE){
    echo "product deleted successfully";
} else {
    echo "Error deleting product:". $conn->error;
}

?>