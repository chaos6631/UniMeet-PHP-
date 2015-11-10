<?php

require_once('inc/header.php');
checkLoginStatus();

if ($_SESSION['user_type'] == "i") {
  header("Location: profile-edit.php");
}

$image = "img/simpsons-young-homer.png";
$count = "1";
$maxImagePage = 9;

?>
<section class="design" id="design">        
        <div class="row">
          <?php include_once ('inc/side-nav.php'); ?>
          <div class="col-xs-12 col-sm-8 col-md-9" id="content-section">
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px; border: 1px solid black;">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <H1 style="border: 1px solid black;">Profile Images</H1>
              </div>  
              <div class="col-xs-6 col-sm-6 col-md-6" style="border: 1px solid black; padding-right: 0px;">
                <button class="btn btn-success" style="float: right; border: 1px solid black;">Upload</button>
                <button class="btn btn-success" style="float: right; border: 1px solid black; margin-right: 5px;">Delete</button>
                <button class="btn btn-success" style="float: right; border: 1px solid black; margin-right: 5px;">Profile Pic</button>
              </div>                          
            </div>            
            <div class="col-xs-12 col-sm-12 col-md-12" id="secondSlider">
              <ul class="slides">
                <li>                  
                  <div class="col-sm-12 col-md-9">
                    <?php 
                    for ($i=0; $i < $maxImagePage; $i++) { 
                      echo buildImageBox($image, $count);
                      $count++;
                    }  
                    ?>                    
                  </div>                                       
                </li>
                <li>                  
                  <div class="col-sm-12 col-md-9">
                    <?php 
                    for ($i=0; $i < $maxImagePage; $i++) { 
                      echo buildImageBox($image, $count);
                      $count++;
                    }   
                    ?>
                  </div>                    
                </li>
              </ul>
            </div>
            <div class="col-md-1 col-md-offset-6 text-right controls">
              <a href="prev" class="prev"><i class="fa fa-angle-left fa-3x"></i></a>
              <a href="next" class="next"><i class="fa fa-angle-right fa-3x"></i></a>
            </div>          
          </div>
        </div>        
      </section>
<?php include_once('inc/footer.php'); ?>