<?php
include('../includes/db_connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM Orders WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Order deleted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
