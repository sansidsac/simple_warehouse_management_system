<?php
include('../includes/db_connect.php'); 
include('navigation.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

$sql = "SELECT * FROM Suppliers";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<h2>Supplier List</h2>
<a href="add_supplier.php">Add New Supplier</a><br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact Info</th>
        <th>Actions</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['contact_info'] . "</td>
                <td>
                    <a href='edit_supplier.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='delete_supplier.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No suppliers found</td></tr>";
    }
    ?>
</table>
