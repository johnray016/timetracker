<?php 

function title(){
	echo "User Dashboard";
}

function content(){
	require "connection.php"
?>
	<div class="card mt-5">
	  <div class="card-header">
	    <h3 class="text-info">Time Tracker</h3>
	  </div>
	  <div class="card-body">
	    <p class="card-text"><strong>Your Last Login Time is:</strong>

    	 <?php 
	        if (isset($_SESSION['username'])) {
	        	$username = $_SESSION['username'];
				$query = "SELECT * FROM users JOIN timetracker ON (users.id = timetracker.user_id) WHERE username = '$username' ORDER BY login_time DESC LIMIT 1";
				$result = mysqli_query($conn,$query);	
				while($loginTime = mysqli_fetch_assoc($result)) {
	                extract($loginTime);
	               $timestamp = strtotime($login_time);
	               $new_date_format = date('F j, Y, g:i:s a', $timestamp);
	               echo "$new_date_format";
				}
			}
	    ?>
	    </p>
	  </div>
	</div>


<?php
}	
require "template.php"
?>