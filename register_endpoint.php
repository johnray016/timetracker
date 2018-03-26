<?php 
	
	require 'connection.php';
	session_start();

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = sha1($_POST['password']);

	$sql = "INSERT INTO users (username,email,password) 
			VALUES ('$username', '$email' ,'$password')";

	$_SESSION['username'] = $username;
			
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if (isset($_SESSION['username'])) {
		$query = "SELECT * FROM users WHERE username = '$username'";
		$result = mysqli_query($conn,$query);		
		if(mysqli_num_rows($result)>0){
			while($users = mysqli_fetch_assoc($result)) {
			extract($users);
			$sql2 = "INSERT INTO timetracker (user_id) VALUES ('$id')";
			mysqli_query($conn,$sql2) or die(mysqli_error($conn));		
			}

		} 
	}
	header('location: userdashboard.php');