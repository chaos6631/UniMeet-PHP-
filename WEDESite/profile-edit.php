<?php

require_once('inc/header.php');
if($_SERVER['REQUEST_METHOD']=="GET")
{
  $bodyType = $_SESSION['body_id'];  
  $city = $_SESSION['city_id'];
  $ethnicity = $_SESSION['ethnic_id'];
  $education = $_SESSION['education_id'];
  $gender = $_SESSION['gender_id'];
  $genderSought = $_SESSION['gender_sought'];  
  $fieldOfStudy = $_SESSION['study_major'];
  $firstName = $_SESSION['first_name'];
  $hairColour = $_SESSION['hair_id'];
  $lastName = $_SESSION['last_name'];
  $language = $_SESSION['language_id'];
  $religion = $_SESSION['religion_id'];
  $school = $_SESSION['school_id'];
  $seeking = $_SESSION['seeking_id'];
  $smoker = $_SESSION['smoker_id'];
  $status = $_SESSION['status_id'];
}else{
   $bodyType = (isset($_POST['bodyType']))?$_POST['bodyType']:$_SESSION['body_id'];
   $city = (isset($_POST['city']))?$_POST['city']:$_SESSION['city_id'];
   $ethnicity = (isset($_POST['ethnicity']))?$_POST['ethnicity']:$_SESSION['ethnic_id'];
   $education = (isset($_POST['education']))?$_POST['education']:$_SESSION['education_id'];
   $gender = (isset($_POST['genders']))?$_POST['genders']:$_SESSION['gender_id'];
   $genderSought = (isset($_POST['genderSought']))?$_POST['genderSought']:$_SESSION['gender_sought'];
   $fieldOfStudy = (isset($_POST['fieldOfStudy']) AND !empty($_POST['fieldOfStudy']))?$_POST['fieldOfStudy']:"Field of Study";
   $firstName = (isset($_POST['firstName']) AND !empty($_POST['firstName']))?$_POST['firstName']:"First Name";
   $lastName = (isset($_POST['lastName']) AND !empty($_POST['lastName']))?$_POST['lastName']:"Last Name";
   $hairColour = (isset($_POST['hairColour']))?$_POST['hairColour']:"";
   $language = (isset($_POST['language']))?$_POST['language']:"";
   $religion = (isset($_POST['religion']))?$_POST['religion']:"";
   $school = (isset($_POST['school']))?$_POST['school']:"";
   $seeking = (isset($_POST['seeking']))?$_POST['seeking']:"";
   $smoker = (isset($_POST['smoker']))?$_POST['smoker']:"";
   $status = (isset($_POST['status']))?$_POST['status']:"";
}
// if post is set update the profile in the database
?>
				<section class="content">				
        <div class="row">
        	<?php include_once ('inc/side-nav.php'); ?>
          <div class="col-xs-12 col-sm-8 col-md-9 content wp1">
            <h1>
            Edit Your Profile
            </h1>
            <p>Enter your information below to update your profile.</p>              
            <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input class="name form-control" type="text" name="firstName" placeholder="<?php echo $firstName; ?>" autofocus >
                <input class="name form-control" type="text" name="lastName" placeholder="<?php echo $lastName; ?>" >
                <div class="output-box-normal"><?php echo buildRadio("genders", $gender); ?></div>
                <select class="dropdown-medium form-control " id="genderSought" name="genderSought" >
                  <?php echo buildDropDown("gender_sought", $genderSought) ?>                                      
                </select>
                <select class="dropdown-large form-control " id="status" name="status" >
                  <?php echo buildDropDown("status", $status); ?>                   
                </select>
                <select class="dropdown-large form-control " id="seeking" name="seeking" >
                  <?php echo buildDropDown("seeking", $seeking); ?>                
                </select>
                <select class="dropdown-large form-control " id="hairColour" name="hairColour" >
                  <?php echo buildDropDown("hair", $hairColour); ?>                
                </select>
                <select class="dropdown-large form-control" id="bodyType" name="bodyType">
                  <?php echo buildDropDown("bodies", $bodyType); ?>
                </select>  
                                              
              </div>
              <div class="col-md-6 form-group">
                <select class="dropdown-large form-control" id="city" name="city" >
                  <?php echo buildDropDown("cities", $city); ?>
                </select>
                <select class="dropdown-large form-control" id="education" name="education" >
                  <?php echo buildDropDown("education", $education); ?>
                </select>
                <select class="dropdown-large form-control" id="school" name="school">
                  <?php echo buildDropDown("schools", $school); ?>
                </select>
                <input class="form-control" type="text" name="fieldOfStudy" placeholder="<?php echo $fieldOfStudy; ?>">               
                <select class="dropdown-large form-control" id="ethnicity" name="ethnicity">
                  <?php echo buildDropDown("ethnicity", $ethnicity); ?>
                </select>
                <select class="dropdown-large form-control" id="language" name="language">
                  <?php echo buildDropDown("languages", $language); ?>
                </select>
                <select class="dropdown-large form-control" id="religion" name="religion">
                  <?php echo buildDropDown("religions", $religion); ?>
                </select>  
                <select class="dropdown-large form-control" id="smoker" name="smoker">
                  <?php echo buildDropDown("smoker", $smoker); ?>
                </select>                
              </div>  
              <div class="col-xs-12 col-sm-12 form-group">
                <input class="login-btn" type="submit" value="Update">
              </div>
            </div>                
            </form>              
          </div>
        </div>        
			</section>
      <script>
        // toastr.options.closeButton = true;
        // toastr.options.positionClass = 'toast-screen-center';
        // toastr.options.timeOut = 0;
        // toastr.options.extendedTimeOut = 0;
        // toastr.success("Thank You, your profile has been updated.", "Successfull Update!!")

          // "closeButton": true,
          // "debug": false,
          // "newestOnTop": false,
          // "progressBar": false,
          // "positionClass": "toast-top-center",
          // "preventDuplicates": false,
          // "onclick": null,
          // "showDuration": "300",
          // "hideDuration": "1000",
          // "timeOut": "5000",
          // "extendedTimeOut": "1000",
          // "showEasing": "swing",
          // "hideEasing": "linear",
          // "showMethod": "fadeIn",
          // "hideMethod": "fadeOut"
      </script>


<?php include_once('inc/footer.php'); ?>