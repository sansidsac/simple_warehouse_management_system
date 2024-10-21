<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact_info = $_POST['contact_info'];
    $number_of_orders = 0;
    $total_spent = 0;

    $sql = "INSERT INTO Shop_Owners (name, contact_info, number_of_orders, total_spent) VALUES ('$name', '$contact_info', $number_of_orders, $total_spent)";

    if ($conn->query($sql) === TRUE) {
        echo "New shop owner added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Add Shop Owner</h2>

<a href="shop_owners.php">Back</a><br><br>

<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="contact_info">Contact Info:</label><br>
    <input type="text" id="contact_info" name="contact_info" required><br>
    <input type="submit" value="Add Shop Owner">
</form>
