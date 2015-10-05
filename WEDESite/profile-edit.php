<?php

require_once('inc/header.php');

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
                <input class="name form-control" type="text" name="firstName" placeholder="First Name" autofocus required>
                <input class="name form-control" type="text" name="lastName" placeholder="Last Name" required>
                <select class="dropdown-small form-control " id="gender" name="gender" required>
                  <option class="selectOptions" value="" selected disabled>Gender:</option>
                  <option class='selectOptions' id='selects' value='male'>Male</option>                  
                  <option class='selectOptions' id='selects' value='female'>Female</option>                                      
                  <option class='selectOptions' id='selects' value='trans'>Trans</option>                                      
                </select>
                <select class="dropdown-medium form-control " id="hairColour" name="hairColour" required>
                  <option class="selectOptions" value="" selected disabled>Hair Colour:</option>
                  <option class='selectOptions' id='selects' value='blonde'>Blonde</option>                  
                  <option class='selectOptions' id='selects' value='black'>Black</option>                  
                  <option class='selectOptions' id='selects' value='brunette'>Brunette</option>                                      
                  <option class='selectOptions' id='selects' value='auburn'>Auburn</option>                                      
                  <option class='selectOptions' id='selects' value='chestnut'>Chestnut</option>                                      
                  <option class='selectOptions' id='selects' value='red'>Red</option>                                      
                  <option class='selectOptions' id='selects' value='grayWhite'>Gray/White</option>                                      
                </select>
                <select class="dropdown-medium form-control " id="bodyType" name="bodyType" required>
                  <option class="selectOptions" value="" selected disabled>Body Type:</option>
                  <option class='selectOptions' id='selects' value='chunky'>Rather Not Say</option>                                      
                  <option class='selectOptions' id='selects' value='thin'>Thin</option>                  
                  <option class='selectOptions' id='selects' value='toned'>Toned</option>
                  <option class='selectOptions' id='selects' value='average'>Average</option>                                      
                  <option class='selectOptions' id='selects' value='athletic'>Athletic</option>
                  <option class='selectOptions' id='selects' value='muscular'>Muscular</option>                                      
                  <option class='selectOptions' id='selects' value='curvy'>Curvy</option>                                      
                  <option class='selectOptions' id='selects' value='overWeight'>Full Figured</option>                                      
                </select>
                <select class="dropdown-small form-control " id="smoker" name="smoker" required>
                  <option class="selectOptions" value="" selected disabled>Smoker?</option>
                  <option class='selectOptions' id='selects' value='yes'>Yes</option>                  
                  <option class='selectOptions' id='selects' value='casual'>Casual</option>                  
                  <option class='selectOptions' id='selects' value='no'>No</option>                                      
                </select>                
                <input class="address form-control" type="text" name="city" placeholder="City" required>
                <input class="address form-control" type="text" name="province" placeholder="Province" required>
                <input class="address form-control" type="text" name="phone" placeholder="Phone Number       XXX-XXX-XXXX" required>                  
                <input class="address form-control" type="text" name="study_major" placeholder="Field of Study" required>                  
              </div>
              <div class="col-md-6 form-group">
                <select class="dropdown-large form-control " id="ethnicity" name="ethnicity" required>
                  <option class="selectOptions" value="" selected disabled>Ethnicity:</option>
                  <option>Caucasian</option>
                  <option>Latin American</option>
                  <option>Asian</option>
                  <option>East Indian</option>
                  <option>Native American</option>
                  <option>African American</option>                                    
                </select>
                <select class="dropdown-large form-control " id="language" name="language" required>
                  <option class="selectOptions" value="" selected disabled>Spoken Language:</option>
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
                <select class="dropdown-large form-control " id="status" name="status" required>
                    <option class="selectOptions" value="" selected disabled>Please Select a Realationship Status:</option>
                    <option class='selectOptions' id='selects' value=''>Single</option>                  
                    <option class='selectOptions' id='selects' value=''>Seperated</option>                  
                    <option class='selectOptions' id='selects' value=''>Recently Divorced</option>                  
                    <option class='selectOptions' id='selects' value=''>Recently Widowed</option>                  
                  </select>
                  <select class="dropdown-large form-control " id="genderInterest" name="genderInterest" required>
                    <option class="selectOptions" value="" selected disabled>I'm seeking a....</option>
                    <option class='selectOptions' id='selects' value=''>Man</option>                  
                    <option class='selectOptions' id='selects' value=''>Woman</option>                  
                  </select>
                  <select class="dropdown-large form-control " id="relationshipType" name="relationshipType" required>
                    <option class="selectOptions" value="" selected disabled>I'm looking for :</option>
                    <option class='selectOptions' id='selects' value=''>Long-Term Relationship</option>                  
                    <option class='selectOptions' id='selects' value=''>Casual Dates</option>                  
                    <option class='selectOptions' id='selects' value=''>Hook-Up</option>                  
                    <option class='selectOptions' id='selects' value=''>Friend</option>                  
                  </select>
                  <select class="dropdown-large form-control " id="religion" name="religion" required>
                    <option class="selectOptions" value="" selected disabled>Religion...</option>
                    <option class='selectOptions' id='selects' value=''>Atheist</option>                  
                    <option class='selectOptions' id='selects' value=''>Catholic</option>                  
                    <option class='selectOptions' id='selects' value=''>Buhddist</option>                  
                    <option class='selectOptions' id='selects' value=''>Islamic</option>                  
                    <option class='selectOptions' id='selects' value=''>Jewish</option>                  
                    <option class='selectOptions' id='selects' value=''>I'd rather not say</option>                  
                    <option class='selectOptions' id='selects' value=''>Not sure</option>                  
                  </select>
                  <select class="dropdown-large form-control " id="education" name="education" required>
                    <option class="selectOptions" value="" selected disabled>Highest level of education reached:</option>
                    <option class='selectOptions' id='selects' value=''>High School</option>                  
                    <option class='selectOptions' id='selects' value=''>Some Post-Secondary</option>                  
                    <option class='selectOptions' id='selects' value=''>Post-Secondary Certificate</option>                  
                    <option class='selectOptions' id='selects' value=''>Post-Secondary Bachelor's</option>                  
                    <option class='selectOptions' id='selects' value=''>Post-Secondary Master's</option>                  
                    <option class='selectOptions' id='selects' value=''>I'd rather not say</option>                  
                    <option class='selectOptions' id='selects' value=''>Not sure</option>                  
                  </select>  
                  <textarea class="form-control dropdown-large" name="aboutUser" rows="6" cols="30" placeholder="Tell us a little about yourself..."></textarea>
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
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-screen-center';
        toastr.options.timeOut = 0;
        toastr.options.extendedTimeOut = 0;
        toastr.success("Thank You, your profile has been updated.", "Successfull Update!!")

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