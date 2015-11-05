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


*/

require_once('inc/header.php');

checkLoginStatus();
if ($_SESSION['user_type'] == "i") {
 header("Location: profile-edit.php");
}
//preselected variables
$city = "";
if ($_SERVER['REQUEST_METHOD']=="GET") {
  //Data retention for initial page load
  $city = (isset($_COOKIE['search_city_id']))?($_COOKIE['search_city_id']):"";
 
}
//Ensure required checkboxes are checked

//Check if $_POST is set and proceed with validation and results retrieval
if ($_SERVER['REQUEST_METHOD']=="POST") {
  $_POST['city_id'] = $genders = (isset($_POST['city_id']))?sumCheckBox($_POST['city_id']):"";
     
  //Set Cookie
  // setcookie("search_city_id", $city, COOKIE_EXPIRE);

  // dump($_POST);
  // dump($_COOKIE);
  // $_SESSION['search_cities'] = $_POST['?'];
  // dump($_SESSION['search_cities']);
  // if (!empty(searchUsers($_POST)) && count(searchUsers($_POST)) == 1) {
  //   $_SESSION['view_user_id'] = $_SESSION['search_results'][0];
  //   header("Location: profile-display.php");
  // }elseif (!empty(searchUsers($_POST)) && count(searchUsers($_POST)) > 1) {
  //   header("Location: profile-search-results.php");
  // }else{
  //   $error = TRUE;
  // }
    
}

?>
<section class="design" id="design">         
        <div class="row">
          <?php include_once ('inc/side-nav.php'); ?>
          <div class="col-xs-12 col-sm-9 col-md-10 design-content">
            <h1>Profile Search</h1>
            <form class="" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">               
            <div class="col-xs-4 col-sm-4 col-md-3 search-box">
              <?php echo buildCheckbox("cities", $city); ?>              
            </div>
            <div class="col-xs-8 col-sm-8 col-md-9">
              <img src="img/mapGTA.png" alt="Map of Greater Toronto Area" usemap="mapGTA">
              <map name="mapGTA">
                <area shape="poly" coords="" href="" alt="">Ajax</area>
                <area shape="poly" coords="" href="" alt="">Whitby</area>
                <area shape="poly" coords="" href="" alt="">Scarborough</area>
                <area shape="poly" coords="" href="" alt="">Mississauga</area>
                <area shape="poly" coords="" href="" alt="">Oshawa</area>
                <area shape="poly" coords="" href="" alt="">Pickering</area>
                <area shape="poly" coords="" href="" alt="">Bowmanville</area>
                <area shape="poly" coords="" href="" alt="">Port Perry</area>                
                <area shape="poly" coords="" href="" alt="">Markham</area>                
                <area shape="poly" coords="" href="" alt="">Brampton</area>                
                <area shape="poly" coords="" href="" alt="">Peterborough</area>                
                <area shape="poly" coords="" href="" alt="">Brooklin</area>                
                <area></area>                
              </map>
            </div>               
            <div class="col-sm-12 text-center">
              <input class="login-btn" type="submit" value="Search"></input>              
            </div>
            </form>
          </div>            
        </div>        
      </section>      
<?php include_once('inc/footer.php'); ?>