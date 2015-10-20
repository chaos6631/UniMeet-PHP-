
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
                <?php echo buildOutputBox("small", getProperty(PLACEHOLDER, "genders"),getProperty($_SESSION['gender_id'], "genders")); ?>             
                <?php echo buildOutputBox("normal",  "First Name:", $_SESSION['first_name']); ?>
                <?php echo buildOutputBox("normal", "Last Name:", $_SESSION['last_name']); ?>                
                <?php echo buildOutputBox("small", getProperty(PLACEHOLDER, "gender_sought"), getProperty($_SESSION['gender_sought'], "gender_sought")); ?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "status"), getProperty($_SESSION['status_id'], "status"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "seeking"), getProperty($_SESSION['seeking_id'], "seeking"));?>                
                <?php echo buildOutputBox("small", "Birth Date:", $_SESSION['birth_date']); ?>                
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "hair"), getProperty($_SESSION['hair_id'], "hair"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "bodies"), getProperty($_SESSION['body_id'], "bodies"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "smoker"), getProperty($_SESSION['smoker_id'], "smoker"));?>                                                                
              </div>
              <div class="col-sm-6 col-md-6">
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "cities"), getProperty($_SESSION['city_id'], "cities"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "education"), getProperty($_SESSION['education_id'], "education"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "schools"), getProperty($_SESSION['school_id'], "schools"));?>
                <?php echo buildOutputBox("normal", "Field of Study:", $_SESSION['study_major']); ?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "ethnicity"), getProperty($_SESSION['ethnic_id'], "ethnicity"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "languages"), getProperty($_SESSION['language_id'], "languages"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "religions"), getProperty($_SESSION['religion_id'], "religions"));?>                
                <?php echo buildOutputBox("normal", "Email:", $_SESSION['email_address']); ?>
                <?php echo buildOutputBox("large", "About Me:", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate."); ?>
              </div>                  
            </div>    
          </div>
        </div>        
			</section>


<?php include_once('inc/footer.php'); ?>