<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

$sql = "SELECT * FROM Orders";  
$result = $conn->query($sql);
?>

<h2>Order List</h2>

<a href="add_order.php">Add New Order</a><br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Product ID</th>
        <th>Shop Owner ID</th>
        <th>Quantity</th>
        <th>Order Date</th>
        <th>Actions</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['product_id'] . "</td>
                <td>" . $row['shop_owner_id'] . "</td>
                <td>" . $row['quantity'] . "</td>
                <td>" . $row['order_date'] . "</td>
                <td>
                    <a href='delete_order.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No orders found</td></tr>";
    }
    ?>
</table>
