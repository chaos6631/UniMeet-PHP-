<?php
include_once '../inc/constants.php';
include_once '../inc/db.php';
include_once 'names.txt';
include_once '../inc/functions.php';


//Insert Users table information

$statement = "INSERT INTO users(
	user_id, 
	password, 
	user_type, 
	email_address, 
	first_name, 
	last_name, 
	birth_date, 
	enroll_date, 
	last_access
	) VALUES(
	$1, 
	'5f4dcc3b5aa765d61d8327deb882cf99', 
	$2, 
	$3, 
	$4, 
	$5, 
	$6, 
	$7, 
	NULL)";
//Insert Profiles table information

//Gender
$gender_id = rand(1,2);	
echo($gender_id) . " ";

if ($gender_id == 1) {
	//Male first name
	$count = count($male_names);
	$random = rand(0, $count);
	$first_name = ucfirst(strtolower($male_names[$random]));
	echo $first_name . " ";
}else{
	//Female first name
	$count = count($female_names);
	$random = rand(0, $count);
	$first_name = ucfirst(strtolower($female_names[$random]));
	echo $first_name . " ";
}

//Last name
$count = count($last_names);
$random = rand(0, $count);
$last_name = ucfirst(strtolower($last_names[$random]));
echo $last_name . "<br>";

//User ID
$user_id = strtolower($first_name) . rand(10, 1000); //first name + random number between 10 and 1000
echo $user_id . "<br>";

//Email
$count = count($email_domains);
$random = rand(0, $count);
$email_address = $user_id . $email_domains[$random]; //user_id@......com
echo $email_address . "<br>";

//Birth Date
//convert to timestamp
// $min = time() - 60*60*24*365*18;
// $max = time() - 60*60*24*365*40;
//generate random date
$birth_date = rand(MIN_AGE, MAX_AGE); //Random date between 18 yrs ago and 40 yrs ago
$birth_date = date('Y-m-d', $birth_date);
echo $birth_date . "<br>";
// $enroll_date = ""; //Random date between today and 1 month ago
// echo $enroll_date . "<br>";

//city_id 
$city_id = getRandomValue("cities");
echo "The City is: ";
echo($city_id) . "<br>";
	
?>