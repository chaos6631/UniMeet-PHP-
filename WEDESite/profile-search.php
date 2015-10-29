<?php
/*---------------------------Things that Must be done---------------------------
-1 does not redirect to profile-select-city.php page if no city is stored on the $_SESSION or saved in a cookie. 

-1 check box inputs not built from database. 

-0.5 check box inputs not built "" (do not pass the sum of the inputted or stored info to the buildCheckBox() function) 

-0.5 search results not ordered by user's last_access 

-0.5 search results not limited to 200 using a constant 

-1 the user_ids of the matches not loaded onto the $_SESSION as an array. 

-1 page redirect not appropriate based on number of search results. i.e. no records found, stay on page with a message; exactly one match found, send directly to profile-display.php (if they are logged in as a completed user); and, multiple matches, send to profile-search-results.php

-0.5 DISABLE users not excluded from search results

SELECT profiles.user_id FROM profiles, users 
  WHERE 1 = 1 AND gender = 2 AND gender_sought = 1 
  AND (profiles.city = 4 OR profiles.city = 8 OR profiles.city = 64) 
  AND (profiles.seeking = 1 OR profiles.seeking = 16) 
  AND (profiles.marital_status = 16 OR profiles.marital_status = 32) 
  AND users.user_id = profiles.user_id AND users.user_type <> 'd'
  ORDER BY users.last_access DESC LIMIT 200
*/

require_once('inc/header.php');
checkLoginStatus();
//preselected variables
$body = $genderSought = $ethnicity = $hair = $language = $religion = $school =  $seeking = $smoker = $status = "";
if ($_SERVER['REQUEST_METHOD']=="GET") {
  $genderSought = (isset($_COOKIE['search_gender_sought']))?($_COOKIE['search_gender_sought']):"";
  $seeking = (isset($_COOKIE['search_seeking']))?($_COOKIE['search_seeking']):"";
  $status = (isset($_COOKIE['search_status']))?($_COOKIE['search_status']):"";
  $smoker = (isset($_COOKIE['search_smoker']))?($_COOKIE['search_smoker']):"";
  $bodies = (isset($_COOKIE['search_bodies']))?($_COOKIE['search_bodies']):"";
  $hair = (isset($_COOKIE['search_hair']))?($_COOKIE['search_hair']):"";
  $schools = (isset($_COOKIE['search_schools']))?($_COOKIE['search_schools']):"";
  $ethnicity = (isset($_COOKIE['search_ethnicity']))?($_COOKIE['search_ethnicity']):"";
  $languages = (isset($_COOKIE['search_languages']))?($_COOKIE['search_languages']):"";
  $religions = (isset($_COOKIE['search_religions']))?($_COOKIE['search_religions']):"";
}
//Ensure required checkboxes are checked

//Check if $_POST is set and proceed with validation and results retrieval
if ($_SERVER['REQUEST_METHOD']=="POST") {

  $genderSought = (isset($_POST['gender_sought']))?sumCheckBox($_POST['gender_sought']):"";
  $seeking = (isset($_POST['seeking']))?sumCheckBox($_POST['seeking']):"";
  $status = (isset($_POST['status']))?sumCheckBox($_POST['status']):"";
  $smoker = (isset($_POST['smoker']))?sumCheckBox($_POST['smoker']):"";
  $bodies = (isset($_POST['bodies']))?sumCheckBox($_POST['bodies']):"";
  $hair = (isset($_POST['hair']))?sumCheckBox($_POST['hair']):"";
  $schools = (isset($_POST['schools']))?sumCheckBox($_POST['schools']):"";
  $ethnicity = (isset($_POST['ethnicity']))?sumCheckBox($_POST['ethnicity']):"";
  $languages = (isset($_POST['languages']))?sumCheckBox($_POST['languages']):"";
  $religions = (isset($_POST['religions']))?sumCheckBox($_POST['religions']):"";
  //Set Cookie
  setcookie("search_gender_sought", $genderSought, COOKIE_EXPIRE);
  setcookie("search_seeking", $seeking, COOKIE_EXPIRE);
  setcookie("search_status", $status, COOKIE_EXPIRE);
  setcookie("search_smoker", $smoker, COOKIE_EXPIRE);
  setcookie("search_bodies", $bodies, COOKIE_EXPIRE);
  setcookie("search_hair", $hair, COOKIE_EXPIRE);
  setcookie("search_schools", $schools, COOKIE_EXPIRE);
  setcookie("search_ethnicity", $ethnicity, COOKIE_EXPIRE);
  setcookie("search_languages", $languages, COOKIE_EXPIRE);
  setcookie("search_religions", $religions, COOKIE_EXPIRE);
}

?>
<section class="design" id="design">         
        <div class="row">
          <?php include_once ('inc/side-nav.php'); ?>
          <div class="col-xs-12 col-sm-9 col-md-10 design-content">
            <h1>Profile Search</h1>
            <form class="" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">   
            <!-- <form class="" method="POST" action="test.php" role="form">    -->
            <div class="col-xs-6 col-sm-4 col-md-3 search-box">
              <?php echo buildCheckbox("gender_sought", $genderSought); ?>
              <?php echo buildCheckbox("seeking", $seeking); ?>
              <?php echo buildCheckbox("status", $status); ?>
              <?php echo buildCheckbox("smoker", $smoker); ?>
            </div>    
            <div class="col-xs-6 col-sm-4 col-md-3 search-box">               
              <?php echo buildCheckbox("bodies", $bodies); ?> 
              <?php echo buildCheckbox("hair", $hair); ?>                
            </div>            
            <div class="col-xs-6 col-sm-4 col-md-3 search-box">
              <?php echo buildCheckbox("schools", $schools); ?>
              <?php echo buildCheckbox("ethnicity", $ethnicity); ?>              
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 search-box">
              <?php echo buildCheckbox("languages", $languages); ?>              
              <?php echo buildCheckbox("religions", $religions); ?>              
            </div>            
            <div class="col-sm-12 text-center">
              <input class="login-btn" type="submit" value="Search"></input>              
            </div>
            </form>
          </div>            
        </div>        
      </section>
<?php include_once('inc/footer.php'); ?>