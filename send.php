<?php

include 'connect_db.php';


if (isset($_POST['message'])) {
	$digits = 8;
	$random_numbers = rand(pow(10, $digits-1), pow(10, $digits)-1);
	if (!isset($_SESSION['name'])) {
		$_SESSION['name'] = "User_".$random_numbers;
	}
	$name = $_SESSION['name'];
	//$name = "John"; 
	$message = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['message'])); //PROTECT DATA
	$date_sent = date("Y-m-d H:i:s");

	mysqli_query($connection, "INSERT INTO chat(name, message, date_sent) VALUES('$name', '$message', '$date_sent')");
}
?>