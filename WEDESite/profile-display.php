
<?php

require_once('inc/header.php');
checkLoginStatus();
if ($_SESSION['user_type'] == "i") {
 header("Location: profile-edit.php");
}
// dump($_GET['user_id']);
if (isset($_GET['user_id'])) {
  $user = getUserInfo($_GET['user_id']);
}else{
  $user = $_SESSION;
}

// dump($user);
?>
			<section class="content">				
        <div class="row row-top">
        	<?php include_once ('inc/side-nav.php'); ?>
          <div class="col-xs-12 col-sm-9 col-md-9" id="content-section">
          	<div class="col-sm-12">
          		<h1>Profile<?php echo '  "' . $user['user_id'] . '"'; ?></h1>
          	</div>              
            <div class="row">
              <div class="col-sm-6 col-md-6">  
                <?php echo buildOutputBox("small", getProperty(PLACEHOLDER, "genders"),getProperty($user['gender_id'], "genders")); ?>             
                <?php echo buildOutputBox("normal",  "First Name:", $user['first_name']); ?>
                <?php echo buildOutputBox("normal", "Last Name:", $user['last_name']); ?>                
                <?php echo buildOutputBox("small", getProperty(PLACEHOLDER, "gender_sought"), getProperty($user['gender_sought'], "gender_sought")); ?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "status"), getProperty($user['status_id'], "status"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "seeking"), getProperty($user['seeking_id'], "seeking"));?>                
                <?php echo buildOutputBox("small", "Birth Date:", $user['birth_date']); ?>                
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "hair"), getProperty($user['hair_id'], "hair"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "bodies"), getProperty($user['body_id'], "bodies"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "smoker"), getProperty($user['smoker_id'], "smoker"));?>                                                                
              </div>
              <div class="col-sm-6 col-md-6">
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "cities"), getProperty($user['city_id'], "cities"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "education"), getProperty($user['education_id'], "education"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "schools"), getProperty($user['school_id'], "schools"));?>
                <?php echo buildOutputBox("normal", "Field of Study:", $user['study_major']); ?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "ethnicity"), getProperty($user['ethnic_id'], "ethnicity"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "languages"), getProperty($user['language_id'], "languages"));?>
                <?php echo buildOutputBox("normal", getProperty(PLACEHOLDER, "religions"), getProperty($user['religion_id'], "religions"));?>                
                <?php echo buildOutputBox("large", "About Me:", $user['self_description']); ?>
              </div>                  
            </div>    
          </div>
        </div>        
			</section>


<?php include_once('inc/footer.php'); ?>