<?php
require 'connection.php';
$id = $_POST['time_id'];
$new_time = mysqli_real_escape_string($conn,$_POST['new_time']);

$sql = "UPDATE timetracker SET 
		login_time = '$new_time'
		WHERE id='$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: adminpanel.php');

?>