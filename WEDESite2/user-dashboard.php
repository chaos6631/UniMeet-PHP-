<?php

require_once('inc/header.php');


?>
      <section class="design" id="design">
        <div class="container-fluid">
          <div class="row">
            <aside class="col-sm-2 col-md-2 sidebar" id="dashboard-nav">              
              <!-- User Profile -->
              <div class="col-sm-12 text-center" id="dashboard-nav-pic">
                <a href="user-dashboard.php">
                  <img class="img-responsive center-block" src="img/av-pete.png">                  
                </a>
                <p class="text-center"><span class="hidden-xs">UserName</span></p>
              </div>
              <div class="col-sm-12">
                <ul class="nav nav-sidebar">
                  <li class=""><a href="profile-edit.php">Edit Profile</a></li>
                  <li><a href="">Friends</a></li>
                  <li><a href="">Messages</a></li>
                  <li><a href="">Sign Out</a></li>
                </ul>
              </div>
            </aside>
            <div class="col-md-9" id="quick-results">
              <div id="secondSlider">
                <ul class="slides">
                  <li>
                    <div class="col-sm-3 col-md-3 design-content">
                      <h1>We thought you might be interested....</h1>
                      <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div> 
                    <div class="col-sm-9 col-md-9">
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive img-circle " src="img/simpsons-young-homer.png"></div>
                          <p class="title">User4</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive img-circle " src="img/simpsons-ned-flanders.png"></div>
                          <p class="title">User6</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive img-circle " src="img/simpsons-young-flanders.png"></div>
                          <p class="title">User4</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive  img-circle " src="img/simpsons-maggie.png"></div>
                          <p class="title">User6</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                    </div>                                       
                  </li>
                  <li>
                    <div class="col-sm-3 col-md-3 design-content">
                      <h1>You never know right....</h1>
                      <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <div class="col-sm-9 col-md-9">
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive img-circle" src="img/simpsons-blue-haired-lawyer.png"></div>
                          <p class="title">User4</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive img-circle" src="img/simpsons-cowboy-bob.png"></div>
                          <p class="title">User6</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive img-circle" src="img/simpsons-marge-shorthair.gif"></div>
                          <p class="title">User4</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway">
                            <img class="img-responsive img-circle" src="img/simpsons-doug-cameraman.png">
                          </div>
                          <p class="title">User6</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive img-circle" src="img/simpsons-kirk-van-houten.png"></div>
                          <p class="title">User6</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="flat-box">
                          <div class="colourway"><img class="img-responsive img-circle" src="img/simpsons-dr-bertano.png"></div>
                          <p class="title">User6</p>
                          <p class="feature-text">University</p>
                        </div>
                      </div>
                    </div>                    
                  </li>
                </ul>
              </div>
              <div class="col-md-1 col-md-offset-11 text-right controls">
                <a href="prev" class="prev"><i class="fa fa-angle-left fa-3x"></i></a>
                <a href="next" class="next"><i class="fa fa-angle-right fa-3x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php include_once('inc/footer.php'); ?>