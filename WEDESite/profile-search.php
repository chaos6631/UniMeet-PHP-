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
*/






require_once('inc/header.php');
//preselected variables
$stickyBody = "";
$stickyGender = "";
$stickyReligion = "";
?>
      <section class="design" id="design">        
        <div class="row row-top">
          <?php include_once ('inc/side-nav.php'); ?>
          <div class="col-md-9 design-content">
            <h1>Profile Search</h1>
            <form class="" method="" action="" role="form">
            <div class="col-sm-12 col-md-3 search-box">
              <h3>RADIO SEARCH ITEMS HERE</h3>              
              <div class="col-sm-12 search-items">
                <?php echo buildRadio("genders", $stickyGender) ?>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 search-box">
              <h3>DROP DOWN SEARCH ITEMS HERE</h3>
              <select class="dropdown-large form-control" id="bodyType" name="bodyType">
                <?php echo buildDropDown("religions", $stickyReligion); ?>
              </select>
            </div>
            <div class="col-sm-12 col-md-8 search-box">            
              <h3>CHECKBOX SEARCH ITEMS HERE</h3>
              <div class="col-sm-12 search-items">
                <?php echo buildCheckbox("bodies", $stickyBody); ?>
              </div>                        
            </div>
            <div class="col-sm-12 text-center">
              <input class="login-btn" type="submit" value="Search"></input>
            </div>
            </form>
          </div>            
        </div>        
      </section>
<?php include_once('inc/footer.php'); ?>