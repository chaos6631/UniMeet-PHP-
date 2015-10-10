<?php

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
                <?php echo buildDropdown("religions", $stickyReligion); ?>
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