<?php
include('../includes/db_connect.php');
include('navigation.php');
?>

<link rel="stylesheet" type="text/css" href="../css/style.css">

<h2>Rate a Product</h2>

<form action="customer.php" method="POST">
    <label for="product_id">Product ID:</label>
    <input type="text" name="product_id" required><br><br>

    <label for="rating">Rating (1 to 5):</label>
    <input type="number" name="rating" min="1" max="5" required><br><br>

    <input type="submit" name="submit" value="Submit Rating">
</form>

<?php
if (isset($_POST['submit'])) {
    $product_id = $_POST['product_id'];
    $rating = $_POST['rating'];

    $update_sql = "UPDATE Products SET customer_rating = $rating WHERE id = $product_id";
    
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Thank you for rating!');</script>";
    } else {
        echo "<script>alert('Error updating rating.');</script>";
    }
}
?>
