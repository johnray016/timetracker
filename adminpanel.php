<?php 

function title(){
	echo "Admin Panel";
}

function content(){
	require "connection.php"
?>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Username</th>
	      <th scope="col">Email</th>
	      <th scope="col">Last Login</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
			$sql = "SELECT t.id, u.username, t.login_time, u.email FROM timetracker AS t JOIN users AS u ON (t.user_id = u.id) ORDER BY login_time DESC";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result)){
				extract($row);
				$timestamp = strtotime($login_time);
		        $new_date_format = date('F j, Y, g:i:s a', $timestamp);
				?>
				<tr>
			      <th><?php echo $username; ?></th>
			      <td><?php echo $email; ?></td>
			      <td><?php echo $new_date_format; ?></td>
			      <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal<?php echo $id; ?>">Edit</button></td>
			    </tr>

			    <!-- The Modal -->
				<div class="modal fade" id="myModal<?php echo $id; ?>">
				  <div class="modal-dialog">
				  	<form method="post" action="update_time.php">
					    <div class="modal-content">

					      <!-- Modal Header -->
					      <div class="modal-header">
					        <h4 class="modal-title">Update Time</h4>
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					      </div>

					      <!-- Modal body -->
					      <div class="modal-body">
					      	<div class="form-group">
							    <input class="form-control"  type="text" name="new_time" value="<?php echo "$new_date_format"; ?>">
							  </div>
					       
					       <input type="hidden" name="time_id" value="<?php echo $id; ?>">
					      </div>

					      <!-- Modal footer -->
					      <div class="modal-footer">
					      	 <button type="submit" class="btn btn-primary" >Update</button>
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					      </div>

					    </div>
				    </form>
				  </div>
				</div>

			<?php } ?>	


	    

	  </tbody>
	</table>



<?php
}	
require "template.php"
?>