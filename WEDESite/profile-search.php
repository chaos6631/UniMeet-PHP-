<?php
/*---------------------------Things that Must be done---------------------------
-1 does not redirect to profile-select-city.php page if no city is stored on the $_SESSION or saved in a cookie. 

-1 check box inputs not built from database. 

-0.5 check box inputs not built "sticky" (do not pass the sum of the inputted or stored info to the buildCheckBox() function) 

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
//preselected variables
$stickyBody = "";
$stickyGender = "";
$stickyReligion = "";
?>
<section class="design" id="design">        
        <div class="row">
          <?php include_once ('inc/side-nav.php'); ?>
          <div class="col-xs-12 col-sm-9 col-md-10 design-content">
            <h1>Profile Search</h1>
            <form class="" method="" action="" role="form">      
            <div class="col-xs-6 col-sm-4 col-md-3 search-box">
              <?php echo buildCheckbox("gender_sought", $stickyBody); ?>
              <?php echo buildCheckbox("seeking", $stickyBody); ?>
              <?php echo buildCheckbox("status", $stickyBody); ?>
              <?php echo buildCheckbox("smoker", $stickyBody); ?>
            </div>    
            <div class="col-xs-6 col-sm-4 col-md-3 search-box">               
              <?php echo buildCheckbox("bodies", $stickyBody); ?> 
              <?php echo buildCheckbox("hair", $stickyBody); ?>                
            </div>            
            <div class="col-xs-6 col-sm-4 col-md-3 search-box">
              <?php echo buildCheckbox("schools", $stickyBody); ?>
              <?php echo buildCheckbox("ethnicity", $stickyBody); ?>              
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 search-box">
              <?php echo buildCheckbox("languages", $stickyBody); ?>              
              <?php echo buildCheckbox("religions", $stickyBody); ?>              
            </div>            
            <div class="col-sm-12 text-center">
              <input class="login-btn" type="submit" value="Search"></input>
            </div>
            </form>
          </div>            
        </div>        
      </section>
<?php include_once('inc/footer.php'); ?>