
<?php

require_once('inc/header.php');


?>
			<section class="content">
				<div class="container-fluid">
          <div class="row">
          	<aside class="col-sm-2 col-md-2 sidebar" id="dashboard-nav">              
              <!-- User Profile -->
              <div class="col-sm-12 text-center" id="dashboard-nav-pic">
                <a href="user-dashboard.php">
                  <img class="img-responsive center-block" src="img/av-pete.png">                  
                </a>
                <p class="text-center"><span class="hidden-xs">UserName</span></p>
              </div>
              <div class="col-sm-12">
                <ul class="nav nav-sidebar">
                  <li class=""><a href="profile-edit.php">Edit Profile</a></li>
                  <li><a href="">Friends</a></li>
                  <li><a href="">Messages</a></li>
                </ul>
              </div>
            </aside>
            <div class="col-md-8 content wp1">
            	<div class="col-sm-12">
<!--             		<img id="profile-display-pic" src="img/av-pete.png">
 -->            		<h1>
              	UserName Profile
              	</h1>
            	</div>              
              <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>First Name:</label><input class="name form-control" type="text" name="firstName" placeholder="First Name" autofocus required>
                  <label>Last Name:</label><input class="name form-control" type="text" name="lastName" placeholder="Last Name" required>
                  <label>Gender:</label><select class="gender-dropdown form-control " id="gender" name="gender" required>
                    <option class="selectOptions" value="" selected disabled>Gender:</option>
                    <option class='selectOptions' id='selects' value='male'>Male</option>                  
                    <option class='selectOptions' id='selects' value='female'>Female</option>                                      
                  </select>
                  <label>Spoken Language:</label><select class="status-dropdown form-control " id="language" name="language" required>
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
                  <label>Address:</label><input class="address form-control" type="text" name="address" placeholder="Address" required>
                  <label>City:</label><input class="address form-control" type="text" name="city" placeholder="City" required>
                  <label>Prov:</label><input class="address form-control" type="text" name="province" placeholder="Province" required>
                  <label>Postal Code:</label><input class="address form-control" type="text" name="postalCode" placeholder="Postal Code" required>                  
                </div>
                <div class="col-md-6 form-group">
                  <label>Relationship Status:</label><select class="status-dropdown form-control " id="status" name="status" required>
                      <option class="selectOptions" value="" selected disabled>Please Select a Realationship Status:</option>
                      <option class='selectOptions' id='selects' value=''>Single</option>                  
                      <option class='selectOptions' id='selects' value=''>Seperated</option>                  
                      <option class='selectOptions' id='selects' value=''>Recently Divorced</option>                  
                      <option class='selectOptions' id='selects' value=''>Recently Widowed</option>                  
                  </select>
                  <label>I'm looking for....</label><select class="status-dropdown form-control " id="genderInterest" name="genderInterest" required>
                    <option class="selectOptions" value="" selected disabled>I'm seeking a....</option>
                    <option class='selectOptions' id='selects' value=''>Man</option>                  
                    <option class='selectOptions' id='selects' value=''>Woman</option>                  
                  </select>
                  <label>I'm interested in....</label><select class="status-dropdown form-control " id="relationshipType" name="relationshipType" required>
                    <option class="selectOptions" value="" selected disabled>I'm looking for :</option>
                    <option class='selectOptions' id='selects' value=''>Long-Term Relationship</option>                  
                    <option class='selectOptions' id='selects' value=''>Casual Dates</option>                  
                    <option class='selectOptions' id='selects' value=''>Hook-Up</option>                  
                    <option class='selectOptions' id='selects' value=''>Friend</option>                  
                  </select>
                  <label>Religion:</label><select class="status-dropdown form-control " id="religion" name="religion" required>
                    <option class="selectOptions" value="" selected disabled>Religion...</option>
                    <option class='selectOptions' id='selects' value=''>Atheist</option>                  
                    <option class='selectOptions' id='selects' value=''>Catholic</option>                  
                    <option class='selectOptions' id='selects' value=''>Buhddist</option>                  
                    <option class='selectOptions' id='selects' value=''>Islamic</option>                  
                    <option class='selectOptions' id='selects' value=''>Jewish</option>                  
                    <option class='selectOptions' id='selects' value=''>I'd rather not say</option>                  
                    <option class='selectOptions' id='selects' value=''>Not sure</option>                  
                  </select>
                  <label>My level of education:</label><select class="status-dropdown form-control " id="education" name="education" required>
                    <option class="selectOptions" value="" selected disabled>Highest level of education reached:</option>
                    <option class='selectOptions' id='selects' value=''>High School</option>                  
                    <option class='selectOptions' id='selects' value=''>Some Post-Secondary</option>                  
                    <option class='selectOptions' id='selects' value=''>Post-Secondary Certificate</option>                  
                    <option class='selectOptions' id='selects' value=''>Post-Secondary Bachelor's</option>                  
                    <option class='selectOptions' id='selects' value=''>Post-Secondary Master's</option>                  
                    <option class='selectOptions' id='selects' value=''>I'd rather not say</option>                  
                    <option class='selectOptions' id='selects' value=''>Not sure</option>                  
                  </select>
                </div>                  
              </div>                
              </form>              
            </div>
          </div>
        </div>
			</section>


<?php include_once('inc/footer.php'); ?>