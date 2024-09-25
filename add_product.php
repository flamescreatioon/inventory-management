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