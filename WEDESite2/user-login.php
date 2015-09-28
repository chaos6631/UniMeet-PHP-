<?php 
require_once('inc/header.php'); 
require_once ('inc/connect.php');


//Checks if request method was POST and if TRUE begins input sanitation and validation process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Sanitize User submissions, removing any possible script injection and assigning each to a variable
 // $userName = pg_escape_string($link, sanitize($_POST["userName"]));
 // $userPass = pg_escape_string($link, sanitize($_POST["userPass"]));
	$_POST['userPass'] = md5($_POST['userPass']);
 	// Prepare a query for execution
	$result = pg_prepare($link, "login_query", 'SELECT * FROM users WHERE user_name = $1 AND user_pass = $2');
	//$result = pg_execute($link, "login_query", array($userName, $userPass));
	$result = pg_execute($link, "login_query", array(sanitize($_POST)));
	$rows = pg_num_rows($result);
	if ($rows == 1) {
		header("Location: user-dashboard.php");
	}else{
		header("Location: index.php");
	}
}
?>
				
			<section class="download-now" id="getstarted">
				<div class="container">
				  <div class="row">
				    <div class="col-md-8 wp1">
				      <h1>
				      Log In
				      </h1>
				      <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
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
require_once('inc/footer.php'); 
?>