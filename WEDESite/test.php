<?php 
//Removes cookie for testing purposes
if (isset($_COOKIE['user_id'])) {
	print_r($_COOKIE);
	//unset($_COOKIE);
  unset($_COOKIE['user_id']);
  print_r($_COOKIE);
  //setcookie('user_id', '', time()-(60*60*24*2));
}

session_start();
require_once 'inc/constants.php';
require_once ('inc/functions.php');
require_once ('inc/db.php');
?>
<html>
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
	<p>Hello</p>
	<br/>
	<?php
		// $age = "";
		// $date = '10/16/1992';
		// $age = ageCalculate($date);
		// echo $age;
		// echo storeNewProfileInfo($_POST);
  $count = 5;
  $sum = 15;
  for ($i=0; $i < $count; $i++) { 
    $var = isBitSet($i, $sum);
    dump($var);    
  }
  
		
	?>
	
</body>
</html>