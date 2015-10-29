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

?>
      <section class="design" id="design">        
          <div class="row row-top">
            <?php include_once ('inc/side-nav.php'); ?>
            <div class="col-sm-9 col-md-9 design-content">
              <div class="col-xs-12">
                <nav class="text-center">
                  <ul class="pagination">
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif">
                <h3>Username</h3>
                <p>School Name</p>
                <p>Match Description</p>
              </div>
              <div class="col-xs-12">
                <nav class="text-center">
                  <ul class="pagination">
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>        
      </section>
<?php include_once('inc/footer.php'); ?>