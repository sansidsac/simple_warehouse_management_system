<?php
include('../includes/db_connect.php'); 
include('navigation.php');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

$sql = "SELECT * FROM Shop_Owners";  
$result = $conn->query($sql);

// Check for SQL errors
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<h2>Shop Owner List</h2>
<a href="add_shop_owner.php">Add New Shop Owner</a><br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact Info</th>
        <th>Number of Orders</th>
        <th>Total Spent</th>
        <th>Actions</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['contact_info'] . "</td>
                <td>" . $row['number_of_orders'] . "</td>
                <td>" . $row['total_spent'] . "</td>
                <td>
                    <a href='edit_shop_owner.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='delete_shop_owner.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No shop owners found</td></tr>";
    }
    ?>
</table>
