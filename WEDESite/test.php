<?php 
//Removes cookie for testing purposes
if (isset($_COOKIE['user_id'])) {
	print_r($_COOKIE);
	unset($_COOKIE['user_id']);
	setcookie('user_id', '', time()-(60*60*24*2));
}


?>