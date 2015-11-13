<?php

require_once('inc/header.php');
checkLoginStatus();

if ($_SESSION['user_type'] == "i") {
  header("Location: profile-edit.php");
}

$image = "img/simpsons-young-homer.png";
$count = "1";
$maxImagePage = 9;
// dump($_SESSION);
$path = IMAGE_FOLDER . $_SESSION['user_id'] . "/";
$userImages = scanUserDirectory($path);
$a = 0;
// $totalImages = count($userImages);
// $sum = $totalImages/MAX_IMAGE_PER_PAGE;
// dump($sum);
// echo($path);
// die;
?>
<section class="design" id="design">        
        <div class="row">
          <?php include_once ('inc/side-nav.php'); ?>
          <div class="col-xs-12 col-sm-8 col-md-9" id="content-section">
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px; ">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <H1 style="">Profile Images</H1>
              </div>  
              <div class="col-xs-6 col-sm-6 col-md-6" style=" padding-right: 0px;">
                <button class="btn btn-success" data-toggle="modal" data-target="#uploadModal" style="float: right; ">Upload</button>
                <button type="submit" class="btn btn-danger" onclick="submitForm1('delete-img.php')" style="float: right;  margin-right: 5px;">Delete</button>
                <button type="submit" class="btn btn-info" onclick="submitForm2('update-profile-img.php')" style="float: right;  margin-right: 5px;">Profile Pic</button>
              </div>                          
            </div>    
            <form id="image_form" name="image_form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="Image Gallery Adjustment">        
              <div class="col-xs-12 col-sm-12 col-md-12" id="secondSlider">
              <?php echo buildImagePages($path, $userImages); ?>
              </div>
            </form>
            <div class="col-md-1 col-md-offset-6 text-right controls">
              <a href="prev" class="prev"><i class="fa fa-angle-left fa-3x"></i></a>
              <a href="next" class="next"><i class="fa fa-angle-right fa-3x"></i></a>
            </div>  

            <!-- --------------UPLOAD IMAGE MODAL------------------------ -->
            <div class="modal fade" id="uploadModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form id="upload_form" name="upload_form" method="POST" enctype="multipart/form-data" role="image_upload">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4>Upload Images</h4>
                    </div>
                    <div class="modal-body">
                      <div id="messages"></div>
                      <input type="file" name="upload_img" id="upload_form">
                    </div>
                    <div>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary" onclick="submitForm2('upload-img.php')">Save</button>
                    </div>
                  </form>                  
                </div>
              </div>
            </div>        
          </div>
        </div>        
      </section>
      <script type="text/javascript">/*Script for deciding which action to execute on form submission*/
        function submitForm1(action){
          document.getElementById('image_form').action = action;
          document.getElementById('image_form').submit();
        }
        function submitForm2(action){
          document.getElementById('upload_form').action = action;
          document.getElementById('upload_form').submit();
        }
      </script>
      <script>/*SCript for error or success message*/
        <?php
        if (isset($_SESSION['requested_action'])) {
          $output = "toastr.options.closeButton = true;\n";
          $output .= "\t  toastr.options.positionClass = 'toast-screen-center';\n";
          $output .= "\t  toastr.options.timeOut = 0;\n";
          $output .= "\t  toastr.options.extendedTimeOut = 0;\n";
          if($_SESSION['requested_action'] == FALSE){
            $output .= "\t  toastr.error(\"" . $_SESSION['info_message'] . "\", \"Error!!\")";          
          }elseif($_SESSION['requested_action'] == TRUE) {
            $output .= "\t  toastr.success(\"" . $_SESSION['info_message'] . "\", \"Success!!\")";
          }else{
            $output .= "";
          }
          echo($output);
          unset($_SESSION['info_message']);
          unset($_SESSION['requested_action']);
        }
        ?>
      </script>
<?php include_once('inc/footer.php'); ?>