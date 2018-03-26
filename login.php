<?php 

function title(){
	echo "Login - Tracker";
}

function content(){
	
?>

	<form method="post" action="login_endpoint.php">
		<caption><h2 class="text-center mt-5"><strong>Login Here</strong></h2></caption>
	  <div class="form-group">
	    <label for="exampleInputUsername">Username</label>
	    <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter email" name="username">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	  </div>
	  <button type="submit" name="login" class="btn btn-info">Login</button>
	</form>	  

<?php

}	
require "template.php"
?>