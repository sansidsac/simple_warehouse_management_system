<?php
include('../includes/db_connect.php');
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM Shop_Owners WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact_info = $_POST['contact_info'];

    $sql = "UPDATE Shop_Owners SET name='$name', contact_info='$contact_info' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Shop owner updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Edit Shop Owner</h2>

<a href="suppliers.php">Back</a><br><br>

<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>
    <label for="contact_info">Contact Info:</label><br>
    <input type="text" id="contact_info" name="contact_info" value="<?php echo $row['contact_info']; ?>" required><br>
    <input type="submit" value="Update Shop Owner">
</form>
