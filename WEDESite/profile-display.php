
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
                  <img class="img-responsive img-circle center-block" src="img/pic2.jpg">                  
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
            		<h1>
              	UserName Profile
              	</h1>
            	</div>              
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>First Name:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Last Name:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Gender:</label><div class="output-box-small"><p>Test Info</p></div>
                  <label>Ethnicity:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Spoken Language:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Address:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>City:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Province:</label><div class="output-box-small"><p>Test Info</p></div>
                  <label>Postal Code:</label><div class="output-box-small"><p>Test Info</p></div>
                </div>
                <div class="col-md-6 form-group">
                  <label>Relationship Status:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Seeking a:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Looking for a:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Religion:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>Education:</label><div class="output-box-normal"><p>Test Info</p></div>
                  <label>About Me:</label><div class="output-box-large"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.</p></div>
                </div>                  
              </div>    
            </div>
          </div>
        </div>
			</section>


<?php include_once('inc/footer.php'); ?>