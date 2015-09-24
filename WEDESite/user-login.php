<?php 
include 'inc/header.php'; 
?>
				
			<section class="download-now" id="getstarted">
				<div class="container">
				  <div class="row">
				    <div class="col-md-8 wp1">
				      <h1>
				      Log In
				      </h1>
				      <form class="form" method="POST" action="user-dashboard.php" role="form">
				        <div class="form-group">
				          <input class="userName form-control" type="text" name="userName" placeholder="Username" autofocus required>
				          <input class="password form-control" type="password" name="userPass" placeholder="Password" required>                  
				          <input class="login-btn" type="submit" value="Log In">
				        </div>
				      </form>              
				    </div>
				  </div>
				</div>
			</section>
<?php
include_once('inc/footer.php'); 
?>