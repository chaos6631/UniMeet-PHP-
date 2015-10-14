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
$birth_date = rand(MIN_AGE, MAX_AGE); //Random date between 18 yrs ago and 40 yrs ago
$birth_date = date('Y-m-d', $birth_date);
echo $birth_date . "<br>";

//Enroll Date
$enroll_date = rand(time(), time() - 60*60*24*30); //Random date between today and 1 month ago
$enroll_date = date('Y-m-d', $enroll_date);
echo $enroll_date . "<br>";

							/*----------Profile------------*/ 
								/*Numerical values*/

 /*gender_sought , city_id , school_id ,study_major ,images , head_line , self_description ,
 match_description ,hair_id , body_id , smoker_id , ethnic_id , language_id , status_id , seeking_id ,
 religion_id , education_id */
$body_id = getRandomValue("bodies");
$city_id = getRandomValue("cities");
$education_id = getRandomValue("education");// This is probably going to be removed
$ethnic_id = getRandomValue("ethnicity");
$gender_sought = getRandomValue("genders");
$hair_id = getRandomValue("hair");
$language_id = getRandomValue("languages");//needs to be adjusted for secondary language
$religion_id = getRandomValue("religions");
$school_id = getRandomValue("schools");
$seeking_id = getRandomValue("seeking");
$status_id = getRandomValue("status");
$smoker_id = getRandomValue("smoker");
echo "The City is: ";
echo($city_id) . "<br>";

									/*Text values*/

$study_major = "";
$images = "";
$head_line = "";
$self_description = "";
$match_description = "";










	
?>