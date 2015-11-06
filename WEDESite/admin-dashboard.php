<?php

/*---------------------------Things that Must be done---------------------------
-1 an admin user that logs in not re-directed to admin.php with an appropriate and personalized messsage (including showing their last_access to help combat hacking) 

-0.5 no functionality that checks for any other user that tries to "backdoor" onto this page (they should be automatically redirected to the index.php no message should be given, do not give potential hackers any extra information)

*/

require_once('inc/header.php');
checkLoginStatus();

if ($_SESSION['user_type'] != "a") {
  header("Location: index.php");
}

?>
<section class="design" id="design">        
        <div class="row">
          <?php include_once ('inc/side-nav.php'); ?> 
          <div class="col-xs-12 col-sm-9 col-md-10 filler"><br>Stuff Here!!!</div>         
        </div>   

      </section>
<?php include_once('inc/footer.php'); ?>