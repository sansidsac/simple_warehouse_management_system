<?php
include('../includes/db_connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM Suppliers WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Supplier deleted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
