<?php

include 'connect_db.php';



$query = mysqli_query($connection, "SELECT * FROM chat ORDER BY date_sent ASC");
while ($info = mysqli_fetch_array($query)) {
	$message = $info['message'];
	$name = $info['name'];
	$date_sent = $info['date_sent'];

	echo "<br><div class='down'><span class='lead'>".$name." :</span> <span class='h5'>". $message."</span></div><br>";
}
?>