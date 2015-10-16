<?php 
//Removes cookie for testing purposes
if (isset($_COOKIE['user_id'])) {
	print_r($_COOKIE);
	unset($_COOKIE['user_id']);
	setcookie('user_id', '', time()-(60*60*24*2));
}

require_once ('inc/functions.php');
?>
<html>
<head></head>
<body>
	<p>Hello</p>
	<br/>
	<?php
		$age = "";
		$date = '10/16/1992';
		$age = ageCalculate($date);
		echo $age;

	?>
</body>
</html>