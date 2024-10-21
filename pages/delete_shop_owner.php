<?php
include('../includes/db_connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM Shop_Owners WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Shop owner deleted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
