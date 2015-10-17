<?php 
// /*---------------------------------Functions-----------------------------------*/
//     //Function that takes a user input as an argument and uses various built in php functions to sanitize it.

// Sanitizes a single variable
function sanitize($var){
    $var = trim($var);
    $var = strip_tags($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}
//Sanitizes an array
function arraySanitize($var){
	if(!is_array($var)){
    	
    	$var = sanitize($var);
    }else{
    	foreach($var as $key => $value)
    	{
    		$var[$key] = singleSanitize($value);
    	}
    }
    return $var;
}

function dump($arg){
	echo "<pre>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo (is_array($arg))? print_r($arg): $arg;
	echo "</pre>";
}
function displayCopyrightInfo(){ 
  echo "&copy; UniMeet. All rights reserved.";
}

//Redirect user to appropriate dashboard
// function dashboardRedirect(){
//   global $conn;
//   if ($_SESSION['user_type'] == "d") {
//         $errorMessage = "Sorry your account has been disabled, please contact us to resolve this issue";
//         // exit();
//   }elseif($_SESSION['user_type'] == "c"){
//     $result = pg_prepare($conn, "profile_query", "SELECT * FROM profiles WHERE user_id = $1");
//     $result = pg_execute($conn, "profile_query", array($userName));
//     $profile = pg_fetch_assoc($result);
//     //Removing duplicate user_id key from Array
//     $a = array_shift($profile);
//     unset($a);                
//     $_SESSION = array_merge($_SESSION, $profile);       
//     header("Location: user-dashboard.php");       
//   }elseif($_SESSION['user_type'] == "a"){
//     $result = pg_prepare($conn, "profile_query", "SELECT * FROM profiles WHERE user_id = $1");
//     $result = pg_execute($conn, "profile_query", array($userName));
//     $profile = pg_fetch_assoc($result);
//     //Removing duplicate user_id key from Array
//     $a = array_shift($profile);
//     unset($a);                
//     $_SESSION = array_merge($_SESSION, $profile);       
//     header("Location: admin-dashboard.php");     
//   }else{
//     header("Location: user-dashboard.php");
//   }       
// }

//collects cookie data for user_id or displays blank login
function userLogin(){
  $output = "";
  if(isset($_COOKIE['user_id'])){
    $output .= "<input class='userName form-control' type='text' name='userName' value='" . $_COOKIE['user_id'] . "' required>\n"; 
    $output .= "\t\t\t\t<input class='password form-control' type='password' name='userPass' placeholder='Password' autofocus required>\n";
  }else{ 
    $output .= "<input class='userName form-control' type='text' name='userName' placeholder='Username' autofocus required>\n";
    $output .= "\t\t\t\t<input class='password form-control' type='password' name='userPass' placeholder='Password' required>\n";  
  }
  return $output;
}

//calculates age of a users
function ageCalculate($var){
	$age = "";
	$now = date('Ymd', time());
	$date = date('Ymd', strtotime($var));
	$age = intval(($now - $date)/10000);
	return $age;
}
?>