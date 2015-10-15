<?php

if (session_id() == "") {
  session_start();
}
  

require_once('inc/constants.php');
require_once ('inc/functions.php');
require_once('inc/db.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo BRAND_NAME; ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link href="css/styles.css?v=1.6" rel="stylesheet">
    <link href="css/queries.css?v=1.6" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/toastr.css" rel="stylesheet">  
    <link href="css/toastr.min.css" rel="stylesheet">        
    <link href="css/main.css" rel="stylesheet">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>  
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/toastr.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">            
        <!-- <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2"> -->            
          <nav class="navbar navbar-collapse navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand"><a class="brand" href="index.php"><?php echo BRAND_NAME; ?></a></div>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-brand">
                <ul class="nav nav-tabs navbar-right">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="user-register.php">Sign Up</a></li>
                  <li><a href="user-dashboard.php">Dashboard</a></li>
                  <li><a href="profile-display.php">Profile</a></li>
                  <li><a href="profile-edit.php">Profile Edit</a></li>
                  <li><a href="profile-search.php">Search</a></li>
                  <li><a href="profile-results.php">Results</a></li>
                  <!-- <li class="disabled"><a href="#">Contact/Support</a></li>                     -->
                  <li class="nav-last">
                  <?php 
                  if (!empty($_SESSION['user_id'])) {
                    echo '<a href="user-logout.php">Logout</a></li>';
                  }else{
                    echo '<a href="user-login.php">Login</a></li>';
                  }
                  ?>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </nav>
        </div>
      </div>
      

      