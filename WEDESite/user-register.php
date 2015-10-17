<?php
include 'inc/header.php'; 
$auth = FALSE;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //check that the user is @ least 18yrs old
  if (isset($_POST['birth_date']) AND ageCalculate($_POST['birth_date']) >= 18) {
    $auth = TRUE;
  }else{
    $auth = FALSE;
    $errorMessage = "Sorry you are not old enough, to become a member of UniMeet. We would like to see you when you become of age though!!";
  }

  //check if user_id/userName exists
  if ($auth == TRUE AND isset($_POST['user_id'])) {
    //TRUE if not taken FALSE otherwise
    if (checkUserName(($_POST['user_id'])) == TRUE) {
      ;
    }else{
      $auth = FALSE;
      $errorMessage = "Sorry that Username is already taken please try another one.";
    }
  }

  //check that the password and confirm password are identical
  if ($auth == TRUE and isset($_POST['password']) === isset($_POST['password2'])) {
    $auth = TRUE;//password is also being validated through javascript and html5 pattern attribute
    unset($_POST['password2']);
  }else{
    $auth = FALE;
    $errorMessage = "Sorry your passwords dont match";
  }

  //If everything passes store in $_SESSION and redirect to profile-create.php
  if ($auth == TRUE) {
    //storeNewUserInfo();
    header("location: profile-create.php");
  }else{
    header("location: user-register.php");
  }
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
                <!-- Error Message Display -->
                <?php 
                  // if (isset($errorMessage) and isset($_POST)) {
                  //   echo '<div class="output-box-normal text-center"><p>' . $errorMessage .'</p></div>';
                  // }
                ?>    
                <input class="userName form-control" type="text" name="user_id" placeholder="Username" pattern=".{6,20}" title="Must be >6 chars but <20" autofocus required>
                <input class="email form-control" type="email" name="email_address" placeholder="Email"  required>
                <input class="password form-control" type="password" name="password" pattern=".{6,8}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must be >6 chars but <8' : ''); if(this.checkValidity()) form.password2.pattern = this.value;" placeholder="Password" required>                  
                <input class="password form-control" type="password" name="password2" pattern=".{6,8}" onchange="this.setCustomValidity(this.validity.patternMismatch ? title='Password doesn't match' : '');" title="Password doesn't match" placeholder="Confirm Password" required>
				        <input class="date form-control" type="date" name="birth_date" placeholder="Enter Birthdate" required>
                <input class="login-btn" type="submit" value="Sign Up">
              </div>
            </form>              
          </div>
        </div>        
      </section>
      <?php include_once('inc/footer.php'); ?>