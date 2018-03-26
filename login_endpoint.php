<?php 
	
	require 'connection.php';
	session_start();

	
	if(isset($_POST['login'])){
		$username = $_POST['username']; 
		$password = sha1($_POST['password']); 

		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn,$sql); 
		

		if(mysqli_num_rows($result)>0){
			$_SESSION['username'] = $username;
			
			if (isset($_SESSION['username'])) {
				$query = "SELECT * FROM users WHERE username = '$username'";
				$result = mysqli_query($conn,$query);		
				if(mysqli_num_rows($result)>0){
					while($users = mysqli_fetch_assoc($result)) {
					extract($users);
						if ($role == 0) {
							$sql2 = "INSERT INTO timetracker (user_id) VALUES ('$id')";
							mysqli_query($conn,$sql2) or die(mysqli_error($conn));
							header('location: userdashboard.php');
						} else {
							header('location: adminpanel.php');
						}
					}
				} 
			}
		} else {
			header('location: login.php');
		}
	}



	