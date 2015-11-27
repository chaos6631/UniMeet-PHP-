<?php

$disabled = $disabledTypei = "";
if (!isset($_SESSION['user_id'])) {
  $disabled = "hidden";
}elseif ((isset($_SESSION['user_type'])) && $_SESSION['user_type'] == "i") {
  $disabledTypei = "disabled";
}
// dump($_SESSION['profile_image']);
//profile image check
if (!isset($_SESSION['profile_image']) || $_SESSION['profile_image'] == 0 || !file_exists(IMAGE_FOLDER . $_SESSION['user_id'] . "/" . $_SESSION['user_id'] . "-" . $_SESSION['profile_image'] . ".jpg")) {
  $profileImage = "img/placeholder-user.png";
}else{    
  $profileImage = IMAGE_FOLDER . $_SESSION['user_id'] . "/" . $_SESSION['user_id'] . "-" . $_SESSION['profile_image'] . ".jpg";    
}

?>
<aside class="col-xs-12 col-sm-3 col-md-2 sidebar" id="dashboard-nav">              
            <!-- User Profile -->
            <div class="col-xs-6 col-sm-12 text-center" id="dashboard-nav-pic">
              <a href="user-dashboard.php">
                <img class="nav-profile-image img-responsive img-circle center-block" src="<?php echo $profileImage; ?>" alt="User Profile Image">                  
              </a>
              <p class="text-center"><span class="hidden-xs"><?php echo $_SESSION['user_id']; ?></span></p>
              <p class="text-center"><span><?php echo "Welcome Back " . $_SESSION['first_name']; ?></span></p>
              <p class="text-center"><span><?php echo "Last Login:<br>" . $_SESSION['last_access']; ?></span></p>
            </div>
            <div class="col-xs-6 col-sm-12">            
              <nav>
                <ul class="nav nav-pills nav-sidebar nav-stacked text-center">                  
                  <li><a href="profile-edit.php"><?php echo $contentHeader; ?> Profile</a></li>
                  <li><a href="user-password-change.php">Change Password</a></li>
                  <li class="<?php echo $disabled . ' ' . $disabledTypei; ?>"><a href="profile-images.php">Images</a></li>
                  <li class="<?php echo $disabled . ' ' . $disabledTypei; ?>"><a href="profile-select-city.php">Search</a></li>
                  <li class="<?php echo $disabled . ' ' . $disabledTypei; ?>"><a href="#">Friends</a></li>
                  <li class="<?php echo $disabled . ' ' . $disabledTypei; ?>"><a href="#">Messages</a></li>
                  <li><a href="user-logout.php">Log Out</a></li>
                </ul>
              </nav>
            </div>
          </aside>
