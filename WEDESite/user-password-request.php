<?php

include_once ('inc/header.php');

?>
<section class="content">				
<div class="row">
	<?php include_once ('inc/side-nav.php'); ?>
		<div class="col-xs-12 col-sm-8 col-md-9 content wp1">
			<h1>
				Forgot Your Password, We'll Send You A New One!!
			</h1>
			<p>Once logged in we recommend changing your password for security prurposes</p>
			<?php //echo $message ?>
			<form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
				<div class="col-md-6 form-group">
					<input class='password form-control' type='password' name='password' placeholder='Enter your password' required>
					<input class='password form-control' type='password' name='confirm_password' placeholder='Confirm your password' required><br/>
					<input class='password form-control' type='password' name='new_password' placeholder='Enter your new password' required>
				</div>
				
				<div class="col-xs-12 col-sm-12 form-group">
				<input class="login-btn" type="submit" value="Change Password">
				</div>  
			</form>
		</div>
	</div>        
</section>

<?php
// if(isset($_POST) && $validated==true){
// $output="<script>
// 	toastr.options.closeButton = true;
// 	toastr.options.positionClass = 'toast-screen-center';
// 	toastr.options.timeOut = 0;
// 	toastr.options.extendedTimeOut = 0;
// 	toastr.success(\"Password successfully changed!\")
// </script>";
// echo $output;
// }
?>
			
<?php include_once('inc/footer.php'); ?>