<?php
//CONNECT TO DATABASE
header('Content-Type: text/html; charset=utf-8'); //SET CONNECTION AS UTF-8

$connection = mysqli_connect("sql312.epizy.com", "epiz_25819882", "iVeuGfxOYqUM2B", "epiz_25819882_chat");

// $connection = mysqli_connect("localhost", "root", "", "chat");
if ($connection == FALSE) {
	die("Couldn't connect");
	exit;
}
mysqli_set_charset($connection, "UTF8");
$db_choose = mysqli_select_db($connection, "chat");
session_start();
?>

