<?php 

include 'inc/header.php'; 
if($_SERVER['REQUEST_METHOD']=="GET")
{
  $bodyType = "";  
  $city = "";
  $ethnicity = "";
  $education = "";
  $gender = "";
  $genderSought = "";
  $fieldOfStudy = "Field of Study";
  $firstName = "First Name";
  $hairColour = "";
  $lastName = "Last Name";
  $language = "";
  $religion = "";
  $school = "";
  $seeking = "";
  $smoker = "";
  $status = "";
}else{
   $bodyType = (isset($_POST['bodyType']))?$_POST['bodyType']:"";
   $city = (isset($_POST['city']))?$_POST['city']:"";
   $ethnicity = (isset($_POST['ethnicity']))?$_POST['ethnicity']:"";
   $education = (isset($_POST['education']))?$_POST['education']:"";
   $gender = (isset($_POST['genders']))?$_POST['genders']:"";
   $genderSought = (isset($_POST['genderSought']))?$_POST['genderSought']:"";
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
/*Testing sticky output*/ 
// echo "Body type: " . $bodyType;
?>
      <section class="download-now" id="profile-create">        
        <div class="row row-top">
          <div class="col-md-8 wp1">
            <h1>Create Your Profile</h1>
            <p>Enter your information below to create a profile or you may skip this step and update it later.</p>              
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
                <input class="login-btn" type="submit" value="Create/Skip Profile">
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
        // toastr.success("Thank You for becoming a member, you may proceed with your profile or skip this step and check out the site.", "Successfull Registration!!")

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

      <?php include 'inc/footer.php'; ?>
         