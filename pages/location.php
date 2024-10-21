<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

$sql = "SELECT Products.name AS product_name, Products.location, Suppliers.name AS supplier_name 
        FROM Products 
        JOIN Suppliers ON Products.supplier_id = Suppliers.id";
        
$result = $conn->query($sql);
?>

<h2>Product Locations and Suppliers</h2>

<table border="1">
    <tr>
        <th>Product Name</th>
        <th>Location</th>
        <th>Supplier Name</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['product_name'] . "</td>
                <td>" . $row['location'] . "</td>
                <td>" . $row['supplier_name'] . "</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No product locations found</td></tr>";
    }
    ?>
</table>
