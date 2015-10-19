<?php
include 'inc/header.php'; 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $userName = $firstName = $lastName = $email = $password = $password2 = $birthDate = "";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Data retention
  $userName = $_POST['user_id'];
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email_address'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $birthDate = $_POST['birth_date'];

  arraySanitize($_POST);
  $auth = TRUE;
  //check that the user is @ least 18yrs old
  if (isset($_POST['birth_date']) AND ageCalculate($_POST['birth_date']) <= 18) {
    $auth = FALSE;
    $errorMessage = "Sorry you are not old enough, to become a member of UniMeet. We would like to see you when you become of age though!!";
  }

  //check if user_id/userName exists and is of proper length
  if ($auth == TRUE AND isset($_POST['user_id'])) {
    //TRUE if not taken FALSE otherwise
    if (checkUserName(($_POST['user_id'])) == TRUE) {
      $auth = TRUE;
      //check length
      if ($_POST['user_id'] <= MIN_USER && $_POST['user_id']>= MAX_USER) {
        $auth = FALSE;
        $errorMessage = "Username must be between 6 and 20 characters long!!";
      }
    }else{
      $auth = FALSE;
      $errorMessage = "Sorry!! That Username is already taken, please try another one.";
    }
  }

  //check if password is proper length
  if ($auth == TRUE and ($_POST['password'] < MIN_PASS || $_POST['password'] > MAX_PASS)) {
    $auth = FALSE;
    $errorMessage = "Password must be between 6 and 8 characters!!";
  }

  //check that the password and confirm password are identical
  if ($auth == TRUE and ($_POST['password'] == $_POST['password2'])) {
    $auth = TRUE;//password is also being validated through javascript and html5 pattern attribute
    unset($_POST['password2']);
  }else{
    $auth = FALE;
    $errorMessage = "Sorry your passwords dont match!!";
  }

  //If everything passes store in $_SESSION and redirect to profile-create.php
  if ($auth == TRUE) {
    //storeNewUserInfo();
    // header("location: profile-create.php");
    //exit();
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
                  if (isset($errorMessage) and isset($_POST)) {
                    echo '<div class="output-box-normal text-center"><p>' . $errorMessage .'</p></div>';
                  }
                ?>    
                <input class="userName form-control" type="text" name="user_id" value="<?php echo $userName;?>" placeholder="Username" autofocus required> <!-- pattern=".{6,20}" title="Must be >6 chars but <20" -->
                <input class="name form-control" type="text" name="first_name" value="<?php echo $firstName;?>" placeholder="First Name">
                <input class="name form-control" type="text" name="last_name" value="<?php echo $lastName;?>" placeholder="Last Name">
                <input class="email form-control" type="email" name="email_address" value="<?php echo $email;?>" placeholder="Email"  required>
                <input class="password form-control" type="password" name="password" value="<?php echo $password;?>" placeholder="Password" required> <!-- pattern=".{6,8}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must be >6 chars but <8' : ''); if(this.checkValidity()) form.password2.pattern = this.value;"  -->                  
                <input class="password form-control" type="password" name="password2" value="<?php echo $password2;?>" placeholder="Confirm Password" required> <!-- pattern=".{6,8}" onchange="this.setCustomValidity(this.validity.patternMismatch ? title='Password doesn't match' : '');" title="Password doesn't match" -->
				        <input class="date form-control" type="date" name="birth_date" value="<?php echo $birthDate;?>" placeholder="Enter Birthdate" required>
                <input class="login-btn" type="submit" value="Sign Up">
              </div>
            </form>              
          </div>
        </div>        
      </section>
      <?php include_once('inc/footer.php'); ?>