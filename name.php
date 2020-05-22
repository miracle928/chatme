<?php
include 'connect_db.php';
if (isset($_POST['name'])) {
	$name = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['name']));
	$_SESSION['name'] = $name;
}
?>