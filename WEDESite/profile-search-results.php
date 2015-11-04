<?php

/*---------------------------Things that Must be done---------------------------
-0.5 page does not check to ensure there are matches on the $_SESSION and redirect user to the profile-search.php page 

-0.5 page does not use an appropriately named constant (declared in constants.php)) to limit number of matches per page 

-3 pagination not attempted 

-2 pagination does not work (not close) 

-1 pagination does not work (close) 

-0.5 search results with more than 10 matches should have a navigation bar (at the top and bottom of
 the profile previews, which implies it should be set up as a function) to 
 navigate through all of the search result matches
*/

require_once('inc/header.php');
//Check if user is logged in
checkLoginStatus();
//Check if SESSION['search_results'] has more than 1 result
// if (count($_SESSION['search_results']) > 1) {
//   // rest of code
// }else{
//   header("Location: profile-display.php");
// }

// $_SESSION['view_user_id'] = $_SESSION['search_results'][x];// x equals whatever user is selected
dump(count($_SESSION['search_results']));
?>
      <section class="design" id="design">        
          <div class="row row-top">
            <?php include_once ('inc/side-nav.php'); ?>
            <div class="col-sm-9 col-md-9 design-content">
              <div class="col-xs-12">
                <nav class="text-center">
                  <?php 
                  echo pagination(count($_SESSION['search_results']), MAX_PAGE_ITEMS, $_SERVER['REQUEST_URI']); 
                  // dump(substr(strstr($_SERVER['REQUEST_URI'], "?page"), 5)); 
                  // dump($_SERVER['REQUEST_URI']); 
                  ?>
                </nav>
              </div>
              <!-- Search Results -->              
              <?php echo buildSearchResult("kerry168"); ?>              
              <div class="col-xs-12">
                <nav class="text-center">
                  <?php echo pagination(count($_SESSION['search_results']), MAX_PAGE_ITEMS, $_SERVER['REQUEST_URI']); ?>                
                </nav>
              </div>
            </div>
          </div>        
      </section>
<?php include_once('inc/footer.php'); ?>