<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

$sql = "SELECT * FROM Products";  
$result = $conn->query($sql);
?>

<h2>Product List</h2>

<a href="add_product.php">Add New Product</a><br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Location</th>
        <th>Price</th>
        <th>Items Sold</th>
        <th>Customer Rating</th>
        <th>Actions</th>
    </tr>

    <?php
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['quantity'] . "</td>
                <td>" . $row['location'] . "</td>
                <td>" . $row['price'] . "</td>
                <td>" . $row['items_sold'] . "</td>
                <td>" . $row['customer_rating'] . "</td>
                <td>
                    <a href='edit_product.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='delete_product.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>
            </tr>";
        }
    }
    else{
        echo "<tr><td colspan='8'>No products found</td></tr>";
    }
    ?>
</table>
