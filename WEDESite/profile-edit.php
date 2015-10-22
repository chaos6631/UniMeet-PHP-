<?php

require_once('inc/header.php');
if($_SERVER['REQUEST_METHOD']=="GET")
{
  $bodyType = (isset($_SESSION['body_id'])?$_SESSION['body_id']:""); 
  $birthDate = (isset($_SESSION['birth_date'])?$_SESSION['birth_date']:"");  
  $city = (isset($_SESSION['city_id'])?$_SESSION['city_id']:"");
  $ethnicity = (isset($_SESSION['ethnic_id'])?$_SESSION['ethnic_id']:"");
  $education = (isset($_SESSION['education_id'])?$_SESSION['education_id']:"");
  $gender = (isset($_SESSION['gender_id'])?$_SESSION['gender_id']:"");
  $genderSought = (isset($_SESSION['gender_sought'])?$_SESSION['gender_sought']:"");  
  $email = (isset($_SESSION['email_address'])?$_SESSION['email_address']:"");  
  $fieldOfStudy = (isset($_SESSION['study_major'])?$_SESSION['study_major']:"Field Of Study");
  $firstName = (isset($_SESSION['first_name'])?$_SESSION['first_name']:"");
  $hairColour = (isset($_SESSION['hair_id'])?$_SESSION['hair_id']:"");
  $lastName = (isset($_SESSION['last_name'])?$_SESSION['last_name']:"");
  $language = (isset($_SESSION['language_id'])?$_SESSION['language_id']:"");
  $religion = (isset($_SESSION['religion_id'])?$_SESSION['religion_id']:"");
  $school = (isset($_SESSION['school_id'])?$_SESSION['school_id']:"");
  $seeking = (isset($_SESSION['seeking_id'])?$_SESSION['seeking_id']:"");
  $smoker = (isset($_SESSION['smoker_id'])?$_SESSION['smoker_id']:"");
  $status = (isset($_SESSION['status_id'])?$_SESSION['status_id']:"");
}else{
   $bodyType = (isset($_POST['body_id']))?$_POST['body_id']:$_SESSION['body_id'];
   $birthDate = (isset($_POST['birth_date']))?$_POST['birth_date']:$_SESSION['birth_date'];
   $city = (isset($_POST['city_id']))?$_POST['city_id']:$_SESSION['city_id'];
   $ethnicity = (isset($_POST['ethnic_id']))?$_POST['ethnic_id']:$_SESSION['ethnic_id'];
   $education = (isset($_POST['education_id']))?$_POST['education_id']:$_SESSION['education_id'];
   $gender = (isset($_POST['gender_id']))?$_POST['gender_id']:$_SESSION['gender_id'];
   $genderSought = (isset($_POST['gender_sought']))?$_POST['gender_sought']:$_SESSION['gender_sought'];
   $email = (isset($_POST['email_address']) AND !empty($_POST['email_address']))?$_POST['email_address']:"Email";
   $fieldOfStudy = (isset($_POST['study_major']) AND !empty($_POST['study_major']))?$_POST['study_major']:"Field of Study";
   $firstName = (isset($_POST['first_name']) AND !empty($_POST['first_name']))?$_POST['first_name']:"First Name";
   $lastName = (isset($_POST['last_name']) AND !empty($_POST['last_name']))?$_POST['last_name']:"Last Name";
   $hairColour = (isset($_POST['hair_id']))?$_POST['hair_id']:$_SESSION['hair_id'];
   $language = (isset($_POST['language_id']))?$_POST['language_id']:$_SESSION['language_id'];
   $religion = (isset($_POST['religion_id']))?$_POST['religion_id']:$_SESSION['religion_id'];
   $school = (isset($_POST['school_id']))?$_POST['school_id']:$_SESSION['school_id'];
   $seeking = (isset($_POST['seeking_id']))?$_POST['seeking_id']:$_SESSION['seeking_id'];
   $smoker = (isset($_POST['smoker_id']))?$_POST['smoker_id']:$_SESSION['smoker_id'];
   $status = (isset($_POST['status_id']))?$_POST['status_id']:$_SESSION['status_id'];
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
                <input class="name form-control" type="text" name="first_name" placeholder="<?php echo $firstName; ?>" >
                <input class="name form-control" type="text" name="last_name" placeholder="<?php echo $lastName; ?>" >
                <input class="name form-control" type="email" name="email_address" placeholder="<?php echo $email; ?>" >
                <input class="name form-control" type="date" name="birth_date" value="<?php echo $birthDate; ?>">
                <div class="output-box-normal">
                  <?php echo buildRadio("genders", $gender); ?>
                </div>
                <div class="output-box-normal">
                  <?php echo buildRadio("gender_sought", $genderSought) ?>
                </div>
                <select class="dropdown-large form-control " id="status_id" name="status_id" >
                  <?php echo buildDropDown("status", $status); ?>                   
                </select>
                <select class="dropdown-large form-control " id="seeking_id" name="seeking_id" >
                  <?php echo buildDropDown("seeking", $seeking); ?>                
                </select>
                <select class="dropdown-large form-control " id="hair_id" name="hair_id" >
                  <?php echo buildDropDown("hair", $hairColour); ?>                
                </select>
                <select class="dropdown-large form-control" id="body_id" name="body_id">
                  <?php echo buildDropDown("bodies", $bodyType); ?>
                </select>  
                                              
              </div>
              <div class="col-md-6 form-group">
                <select class="dropdown-large form-control" id="city_id" name="city_id" required>
                  <?php echo buildDropDown("cities", $city); ?>
                </select>
                <select class="dropdown-large form-control" id="education_id" name="education_id" >
                  <?php echo buildDropDown("education", $education); ?>
                </select>
                <select class="dropdown-large form-control" id="school_id" name="school_id" required>
                  <?php echo buildDropDown("schools", $school); ?>
                </select>
                <input class="form-control" type="text" name="study_major" placeholder="<?php echo $fieldOfStudy; ?>">               
                <select class="dropdown-large form-control" id="ethnic_id" name="ethnic_id">
                  <?php echo buildDropDown("ethnicity", $ethnicity); ?>
                </select>
                <select class="dropdown-large form-control" id="language_id" name="language_id">
                  <?php echo buildDropDown("languages", $language); ?>
                </select>
                <select class="dropdown-large form-control" id="religion_id" name="religion_id">
                  <?php echo buildDropDown("religions", $religion); ?>
                </select>  
                <select class="dropdown-large form-control" id="smoker_id" name="smoker_id">
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