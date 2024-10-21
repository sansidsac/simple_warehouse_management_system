<?php
include('../includes/db_connect.php');
$id = $_GET['id'];

$sql = "DELETE FROM Products WHERE id=$id";

if($conn->query($sql) === TRUE){
    echo "Product deleted successfully";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
