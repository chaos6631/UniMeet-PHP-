<?php
 include 'inc/header.php'; 
?>

      <section class="download-now" id="getstarted">
        <div class="container">
          <div class="row">
            <div class="col-md-8 wp1">
              <h1>
              Sign Up
              </h1>
              <p>Enter your information below to create an account.</p>
              <form class="form" method="POST" action="profile-create.php" role="form">
                <div class="form-group">
                  <input class="userName form-control" type="text" name="userName" placeholder="Username" autofocus required>
                  <input class="email form-control" type="email" name="userEmail" placeholder="Email" required>
                  <input class="password form-control" type="password" name="userPass" placeholder="Password" required>                  
                  <input class="password form-control" type="password" name="userPass2" placeholder="Confirm Password" required>                  
                  <input class="login-btn" type="submit" value="Sign Up">
                </div>
              </form>              
            </div>
          </div>
        </div>
      </section>
      <?php include_once('inc/footer.php'); ?>