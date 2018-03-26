<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand text-white" href="#">Time Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <?php 
            if(isset($_SESSION['username']) ) {
                $username = $_SESSION['username'];
                ?>
                 <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hello <?php echo "$username"; ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
            <?php      
            } else {
                echo "<a href='login.php' class='text-white'> Login </a>";
            }
        ?>
         </li>
      </ul>  
    </div>
  </div>
</nav>