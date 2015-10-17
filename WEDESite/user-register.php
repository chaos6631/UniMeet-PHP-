<?php
include 'inc/header.php'; 

if (isset($_POST)) {

  //check that the user is @ least 18yrs old

  //check if user_id/userName exists

  //check that the password and confirm password are identical

  //If everything passes store in $_SESSION and redirect to profile-create.php
}
?>
      <section class="download-now" id="getstarted">        
        <div class="row">
          <div class="col-md-8 wp1">
            <h1>
            Sign Up
            </h1>
            <p>Enter your information below to create an account.</p>
            <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
              <div class="form-group">
                <input class="userName form-control" type="text" name="userName" placeholder="Username" autofocus required>
                <input class="email form-control" type="email" name="userEmail" placeholder="Email" required>
                <input class="password form-control" type="password" name="userPass" placeholder="Password" required>                  
                <input class="password form-control" type="password" name="userPass2" placeholder="Confirm Password" required>
				        <input class="date form-control" type="date" name="birthDate" placeholder="Enter Birthdate" required>
                <input class="login-btn" type="submit" value="Sign Up">
              </div>
            </form>              
          </div>
        </div>        
      </section>
      <?php include_once('inc/footer.php'); ?>