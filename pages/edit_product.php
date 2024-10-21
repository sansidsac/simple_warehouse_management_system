<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM Products WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $supplier_id = $_POST['supplier_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE Products SET name='$name', supplier_id='$supplier_id', price=$price, quantity=$quantity WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Edit Product</h2>

<a href="products.php">Back</a><br><br>

<form method="POST" action="">
    <label for="name">Product Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>
    <label for="supplier_id">Supplier ID:</label><br>
    <input type="number" id="supplier_id" name="supplier_id" value="<?php echo $row['supplier_id']; ?>" required><br>
    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price" value="<?php echo $row['price']; ?>" required><br>
    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity" value="<?php echo $row['quantity']; ?>" required><br>
    <input type="submit" value="Update Product">
</form>
