<?php 

include 'inc/header.php'; 
if($_SERVER['REQUEST_METHOD']=="GET")
{
  $bodyType = "";
  $school = "";
  $gender = "";
}else{
   $bodyType = (isset($_POST['bodyType']))?$_POST['bodyType']:"";
   $gender = (isset($_POST['gender']))?$_POST['gender']:"";
   $school = (isset($_POST['school']))?$_POST['school']:"";

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
                <input class="name form-control" type="text" name="firstName" placeholder="First Name" autofocus >
                <input class="name form-control" type="text" name="lastName" placeholder="Last Name" >
                <select class="dropdown-small form-control " id="gender" name="gender" >
                  <?php echo buildDropDown("genders", $gender) ?>                                      
                </select>
                <select class="dropdown-large form-control" id="bodyType" name="bodyType">
                  <?php echo buildDropDown("bodies", $bodyType); ?>
                </select>                
                <input class="address form-control" type="text" name="city" placeholder="City" >
                <select class="dropdown-large form-control" id="school" name="school">
                  <?php echo buildDropDown("schools", $school); ?>
                </select>                               
              </div>
              <div class="col-md-6 form-group">
                <select class="dropdown-large form-control" id="language" name="language" >
                  <option>English</option>
                  <option>French</option>
                  <option>Spanish</option>
                  <option>German</option>
                  <option>Italian</option>
                  <option>Chinese</option>
                  <option>Tagalog</option>
                  <option>Polish</option>
                  <option>Korean</option>
                  <option>Vietnamese</option>
                  <option>Portuguese</option>
                  <option>Japanese</option>
                  <option>Greek</option>
                  <option>Arabic</option>
                  <option>Hindi (urdu)</option>
                  <option>Russian</option>
                  <option>Yiddish</option>
                  <option>Thai (laotian)</option>
                  <option>Persian</option>
                  <option>French Creole</option>
                  <option>Armenian</option>
                  <option>Navaho</option>
                  <option>Hungarian</option>
                  <option>Hebrew</option>
                  <option>Dutch</option>
                  <option>Mon-khmer (cambodian)</option>
                  <option>Gujarathi</option>
                  <option>Ukrainian</option>
                  <option>Czech</option>
                  <option>Pennsylvania Dutch</option>
                  <option>Miao (hmong)</option>
                  <option>Norwegian</option>
                  <option>Slovak</option>
                  <option>Swedish</option>
                  <option>Serbocroatian</option>
                  <option>Kru</option>
                  <option>Rumanian</option>
                  <option>Lithuanian</option>
                  <option>Finnish</option>
                  <option>Panjabi</option>
                  <option>Formosan</option>
                  <option>Croatian</option>
                  <option>Turkish</option>
                  <option>Ilocano</option>
                  <option>Bengali</option>
                  <option>Danish</option>
                  <option>Syriac</option>
                  <option>Samoan</option>
                  <option>Malayalam</option>
                  <option>Cajun</option>
                  <option>Amharic</option>
                </select>
                <select class="dropdown-large form-control " id="status" name="status" >
                    <option class="selectOptions" value="" selected disabled>Please Select a Realationship Status:</option>
                    <option class='selectOptions' id='selects' value=''>Single</option>                  
                    <option class='selectOptions' id='selects' value=''>Seperated</option>                  
                    <option class='selectOptions' id='selects' value=''>Recently Divorced</option>                  
                    <option class='selectOptions' id='selects' value=''>Recently Widowed</option>                  
                  </select>
                  <select class="dropdown-large form-control " id="genderInterest" name="genderInterest" >
                    <option class="selectOptions" value="" selected disabled>I'm seeking a....</option>
                    <option class='selectOptions' id='selects' value=''>Man</option>                  
                    <option class='selectOptions' id='selects' value=''>Woman</option>                  
                  </select>
                  <select class="dropdown-large form-control " id="relationshipType" name="relationshipType" >
                    <option class="selectOptions" value="" selected disabled>I'm looking for :</option>
                    <option class='selectOptions' id='selects' value=''>Long-Term Relationship</option>                  
                    <option class='selectOptions' id='selects' value=''>Casual Dates</option>                  
                    <option class='selectOptions' id='selects' value=''>Hook-Up</option>                  
                    <option class='selectOptions' id='selects' value=''>Friend</option>                  
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
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-screen-center';
        toastr.options.timeOut = 0;
        toastr.options.extendedTimeOut = 0;
        toastr.success("Thank You for becoming a member, you may proceed with your profile or skip this step and check out the site.", "Successfull Registration!!")

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
         