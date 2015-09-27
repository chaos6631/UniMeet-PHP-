<?php

//Constants
define("BASE_URL", '/WEDESite/');
define("BRAND_NAME", "UniMeet");
define("BRAND_LOGO", "img/logo6.png");

// /*---------------------------------Functions-----------------------------------*/
//     //Function that takes a user input as an argument and uses various built in php functions to sanitize it.
function sanitize($var){
    $var = trim($var);
    $var = strip_tags($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}
function dump($arg){
	echo "<pre>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo (is_array($arg))? print_r($arg): $arg;
	echo "</pre>";
}
?>