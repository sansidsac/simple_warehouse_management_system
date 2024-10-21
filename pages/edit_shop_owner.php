<?php
include('../includes/db_connect.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM Shop_Owners WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Edit Shop Owner</h2>

<a href="shop_owners.php">Back</a><br><br>

<form action="edit_shop_owner_action.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Contact Info: <input type="text" name="contact_info" value="<?php echo $row['contact_info']; ?>"><br>
    Shop Location: <input type="text" name="shop_location" value="<?php echo $row['shop_location']; ?>"><br>
    <input type="submit" value="Update Shop Owner">
</form>
