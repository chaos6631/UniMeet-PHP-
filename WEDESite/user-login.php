<?php 
include_once('inc/header.php'); 

//Checks if request method was POST and if TRUE begins input sanitation and validation process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Sanitize User submissions, removing any possible script injection and assigning each to a variable
 	$userName = pg_escape_string($conn, sanitize($_POST["userName"]));
 	$userPass = pg_escape_string($conn, sanitize($_POST["userPass"]));
 	//Hash the password
 	$userPass = md5($userPass);
 	// Prepare query for execution
	$result = pg_prepare($conn, "login_query", 'SELECT * FROM users WHERE user_id = $1 AND password = $2');
	$result = pg_execute($conn, "login_query", array($userName, $userPass));	
	$rows = pg_num_rows($result);	
	
	if ($rows == 1) {
		$_SESSION = pg_fetch_assoc($result);		
		header("Location: user-dashboard.php");
	}
	else{		
		$errorMessage = "Sorry you have entered an incorrect username and password combination";
	}

 	/*Notification for type of error*/
	// Prepare username query for execution
	// $result = pg_query($conn,'SELECT * FROM users WHERE user_id = $userName');
	
	// if ($result == TRUE) {
	// 	$_SESSION['user_id'] = $userName;		
	// 	$auth = TRUE;
	// }
	// else{		
	// 	$errorMessage = "Sorry you have entered an incorrect Username";
	// 	$auth = FALSE;
	// }
	
	// if ($auth == TRUE) {
	// 	// Prepare password query for execution
	// 	$result = pg_query($conn,'SELECT * FROM users WHERE user_id = $userName AND password = $userPass');
	
	// 	if ($result == TRUE) {			
	// 		unset($errorMessage);
	// 		header("Location: user-dashboard.php");
	// 	}
	// 	else{
	// 		$errorMessage = "Sorry you have entered an incorrect Password";
	// 	}
	// }
	
}
?>				
			<section class="download-now">				
			  <div class="row">
			    <div class="col-md-8 wp1">
			      <h1>
			      Log In
			      </h1>
			      <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
			        <div class="form-group">			        		        	
			          <input class="userName form-control" type="text" name="userName" placeholder="Username" autofocus required>
			          <input class="password form-control" type="password" name="userPass" placeholder="Password" required>                  
			          <!-- Error Message Display -->
			        	<?php 
			        		if (isset($errorMessage)) {
			        			echo '<div class="output-box-normal text-center"><p>' . $errorMessage .'</p></div>';
			        		}
			        	?>		
			          <input class="login-btn" type="submit" value="Log In">
			        </div>
			      </form>              
			    </div>
			  </div>				
			</section>
			
<?php
require_once('inc/footer.php'); 
?>