<?php

include 'connect_db.php';

if(isset($_POST['submit'])){
    
    $mood = htmlentities(mysqli_real_escape_string($connection, $_POST['mood']));
    $howareyou = htmlentities(mysqli_real_escape_string($connection, $_POST['howareyou']));
    $age = htmlentities(mysqli_real_escape_string($connection, $_POST['age']));
    $country = htmlentities(mysqli_real_escape_string($connection, $_POST['country']));
    $status = htmlentities(mysqli_real_escape_string($connection, $_POST['status']));

    $sql = "INSERT INTO `user_information` (`user_mood`, `user_howareyou`, `user_age`, `user_country`, `user_status`) VALUES ('$mood','$howareyou','$age','$country','$status')";

    $connection->query($sql) or die ($connection->error);
    echo "<script>alert('Thank you!,  Start conversation now :)')</script>";
    echo "<script>window.open('message.php', '_self')</script>";

}

?>