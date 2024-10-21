<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $supplier_id = $_POST['supplier_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $items_sold = 0;
    $customer_rating = 0;

    $sql = "INSERT INTO Products (name, supplier_id, price, quantity, items_sold, customer_rating) VALUES ('$name', '$supplier_id', $price, $quantity, $items_sold, $customer_rating)";

    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Add Product</h2>

<a href="products.php">Back</a><br><br>

<form method="POST" action="">
    <label for="name">Product Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="supplier_id">Supplier ID:</label><br>
    <input type="number" id="supplier_id" name="supplier_id" required><br>
    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price" required><br>
    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity" required><br>
    <input type="submit" value="Add Product">
</form>
