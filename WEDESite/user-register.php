<?php
include 'inc/header.php'; 

if (isset($_POST)) {

  //check that the user is @ least 18yrs old
  if (isset($_POST['birthDate']) AND ageCalculate($_POST['birthDate']) >= 18) {
    $auth = TRUE;
  }else{
    $auth = FALSE;
    $errorMessage = "Sorry you are not old enough, to become a member of UniMeet. We would like to see you when you become of age though!!";
  }

  //check if user_id/userName exists
  if ($auth == TRUE AND isset($_POST['userName'])) {
    //TRUE if not taken FALSE otherwise
    if (checkUserName(($_POST['userName'])) == TRUE) {
      ;
    }else{
      $auth = FALSE;
      $errorMessage = "Sorry that Username is already taken please try another one.";
    }
  }

  //check that the password and confirm password are identical
  if ($auth == TRUE and isset($_POST['userPass']) === isset($_POST['userPass2'])) {
    continue;//password is also being validated through javascript and html5 pattern attribute
  }else{

  }

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
                <input class="userName form-control" type="text" name="userName" placeholder="Username" pattern=".{6,20}" title="Must be >6 chars but <21" autofocus required>
                <input class="email form-control" type="email" name="userEmail" placeholder="Email"  required>
                <input class="password form-control" type="password" name="userPass" pattern=".{6,8}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must be >6 chars but <8' : ''); if(this.checkValidity()) form.userPass2.pattern = this.value;" placeholder="Password" required>                  
                <input class="password form-control" type="password" name="userPass2" pattern=".{6,8}" onchange="this.setCustomValidity(this.validity.patternMismatch ? title='Password doesn't match' : '');" title="Password doesn't match" placeholder="Confirm Password" required>
				        <input class="date form-control" type="date" name="birthDate" placeholder="Enter Birthdate" required>
                <input class="login-btn" type="submit" value="Sign Up">
              </div>
            </form>              
          </div>
        </div>        
      </section>
      <?php include_once('inc/footer.php'); ?>