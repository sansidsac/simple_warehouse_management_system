<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

if (isset($_POST['submit'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $shop_owner_id = $_POST['shop_owner_id'];
    
    $sql = "SELECT quantity, price FROM Products WHERE id = $product_id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();

    $quantity = $product['quantity'];
    $price = $product['price'];

    if ($quantity < $quantity) {
        echo "<script>alert('Not enough stock available!');</script>";
    } else {
        $total_price = $price * $quantity;
        
        $sql_insert = "INSERT INTO Orders (product_id, shop_owner_id, quantity) 
                       VALUES ($product_id, $shop_owner_id, $quantity)";
        
        if ($conn->query($sql_insert) === TRUE) {
            echo "<script>alert('Order placed successfully!');</script>";

            $new_stock = $quantity - $quantity;
            $sql_update_stock = "UPDATE Products SET quantity = $new_stock, items_sold = items_sold + $quantity WHERE id = $product_id";
            $conn->query($sql_update_stock);

            $sql_update_shop_owner = "UPDATE Shop_Owners 
                                      SET number_of_orders = number_of_orders + 1, 
                                          total_spent = total_spent + $total_price 
                                      WHERE id = $shop_owner_id";
            $conn->query($sql_update_shop_owner);

        } else {
            echo "<script>alert('Error placing order.');</script>";
        }
    }
}
?>

<h2>Place Order</h2>

<a href="shop_owners.php">Back</a><br><br>

<form action="add_order.php" method="POST">
    <label for="product_id">Product ID:</label>
    <input type="text" name="product_id" required><br><br>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" min="1" required><br><br>

    <label for="shop_owner_id">Shop Owner ID:</label>
    <input type="text" name="shop_owner_id" required><br><br>

    <input type="submit" name="submit" value="Place Order">
</form>
