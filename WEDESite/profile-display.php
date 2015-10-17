
<?php

require_once('inc/header.php');


?>
			<section class="content">				
        <div class="row row-top">
        	<?php include_once ('inc/side-nav.php'); ?>
          <div class="col-xs-12 col-sm-9 col-md-9 content">
          	<div class="col-sm-12">
          		<h1>Profile<?php echo '  "' . $_SESSION['user_id'] . '"'; ?></h1>
          	</div>              
            <div class="row">
              <div class="col-sm-6 col-md-6">  
                <label>Gender:</label><div class="output-box-small"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['gender_id'], "genders");?></p></div>              
                <label>First Name:</label><div class="output-box-normal"><p><?php echo $_SESSION['first_name']; ?></p></div>
                <label>Last Name:</label><div class="output-box-normal"><p><?php echo $_SESSION['last_name']; ?></p></div>                
                <label>Interested in a _______ companion:</label><div class="output-box-normal"><p><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['gender_sought'], "genders");?></p></div>
                <label>Relationship Status:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['status_id'], "status");?></p></div>
                <label>Looking for a:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['seeking_id'], "seeking");?></p></div>                
                <label>Birth Date:</label><div class="output-box-normal"><p><?php echo $_SESSION['birth_date']; ?></p></div>                
                <label>Hair Colour:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['hair_id'], "hair");?></p></div>
                <label>Body Type:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['body_id'], "bodies");?></p></div>
                <label>Smoker:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['smoker_id'], "smoker");?></p></div>                                
                <label>Ethnicity:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['ethnic_id'], "ethnicity");?></p></div>
                <label>Spoken Language:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['language_id'], "languages");?></p></div>
              </div>
              <div class="col-sm-6 col-md-6">
                <label>City:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['city_id'], "cities");?></p></div>
                <label>Highest Level of Education:</label><div class="output-box-normal"><p><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['education_id'], "education");?></p></div>
                <label>School:</label><div class="output-box-normal"><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['school_id'], "schools");?></p></div>
                <label>Field of Study:</label><div class="output-box-normal"><p><?php echo $_SESSION['study_major']; ?></p></div>
                <label>Religion:</label><div class="output-box-normal"><p><p><?php echo getProperty($_SESSION['user_id'], $_SESSION['religion_id'], "religions");?></p></div>                
                <label>Email Address:</label><div class="output-box-normal"><p><p><?php echo $_SESSION['email_address']; ?></p></div>
                <label>About Me:</label><div class="output-box-large"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.</p></div>
              </div>                  
            </div>    
          </div>
        </div>        
			</section>


<?php include_once('inc/footer.php'); ?>