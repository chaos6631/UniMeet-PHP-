<?php

require_once ('inc/header.php');
$message = "";
$new_pass="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
	arraySanitize($_POST);
	$validated = false;
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$stmtRequest = pg_prepare($conn, "user_password_request", 'SELECT * FROM users WHERE user_id = $1 AND email_address = $2');
		$result = pg_execute($conn, "user_password_request", array($_POST['user_id'],$_POST['email']));
		$rows = pg_num_rows($result);
		if ($rows==1){
			$validated=true;
		}
	}
	
	if ($validated==true) {
		$new_pass = generateRandomPassword();
		$mail_to=$_POST['email'];
		$mail_subject="New Password Requested for " . $_POST['user_id'];
		$mail_body=file_get_contents('inc/passwordRequestEmail.php');
		mail($mail_to, $mail_subject, $mail_body);
		
		
		$stmtUpdate = pg_prepare($conn, "request_password_update", 'UPDATE users SET password = $1 WHERE user_id = $2');
		$result = pg_execute($conn, "request_password_update", array(md5($new_pass),$_POST['user_id']));
	}
}
?>
<section class="content">				
<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-9 content wp1">
			<h1>
				Forgot Your Password, We'll Send You A New One!!
			</h1>
			<p>Once logged in we recommend changing your password for security prurposes</p>
			<?php echo $new_pass; ?>
			<form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
				<div class="col-md-6 form-group">
					<input class='password form-control' type='text' name='user_id' placeholder='Enter your user name' required>
					<input class='password form-control' type='text' name='email' placeholder='Enter your email' required>
				</div>
				
				<div class="col-xs-12 col-sm-12 form-group">
				<input class="login-btn" type="submit" value="Change Password">
				</div>  
			</form>
		</div>
	</div>        
</section>

<?php
//if(isset($_POST) && $validated==true){
//$output="<script>
//	toastr.options.closeButton = true;
//	toastr.options.positionClass = 'toast-screen-center';
//	toastr.options.timeOut = 0;
//	toastr.options.extendedTimeOut = 0;
//	toastr.success(\"An email with your new password has been sent!\");
//</script>";
//echo $output;
//}
?>
			
<?php include_once('inc/footer.php'); ?>