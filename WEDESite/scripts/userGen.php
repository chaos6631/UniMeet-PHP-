<?php

include_once 'names.txt';

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




?>