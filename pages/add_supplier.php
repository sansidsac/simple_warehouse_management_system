<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact_info = $_POST['contact_info'];

    $sql = "INSERT INTO Suppliers (name, contact_info) VALUES ('$name', '$contact_info')";

    if ($conn->query($sql) === TRUE) {
        echo "New supplier added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Add Supplier</h2>

<a href="suppliers.php">Back</a><br><br>

<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="contact_info">Contact Info:</label><br>
    <input type="text" id="contact_info" name="contact_info" required><br>
    <input type="submit" value="Add Supplier">
</form>
