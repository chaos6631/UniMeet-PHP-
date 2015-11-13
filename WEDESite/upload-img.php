<?php
session_start();
require_once 'inc/constants.php';
require_once 'inc/db.php';
require_once 'inc/functions.php';
echo "You've reached the upload image page";

/*Check if user directory exists, if not create it*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$path = IMAGE_FOLDER . $_SESSION['user_id'];
	if (is_dir($path) == FALSE) {
		if (!mkdir($path)) {
			die("unable to create directory");
		}
	}
	/*Scan user directory and count number of current images, also removing any non image files*/
	$array = scandir($path, SCANDIR_SORT_ASCENDING);
	
	dump($array);
	array_shift($array);
	array_shift($array);
	array_shift($array);
	dump($array);
	// echo $count = count($array);
	echo $count = count(scanUserDirectory($path));
	die;
	// dump($_FILES['upload_img']['type']);
	// dump($_FILES['upload_img']['size']);
	
	/*Checking file type and size*/
	$allowedExt = array("image/jpeg");
	if ((!in_array($_FILES['upload_img']['type'], $allowedExt)) || ($_FILES['upload_img']['size'] > 1572864)) {
		$_SESSION['info_message'] = "Sorry we only accept \"jpeg\" type images that are less than 1.5mb, please try another image.";
		$_SESSION['requested_action'] = FALSE;
	}
	/*Saving file to user directory*/
	// $path = $path . "/" . $_SESSION['user_id'] . "-0" . $count . ".jpg";
	// move_uploaded_file($_FILES['upload_img']['tmp_name'][0], $path);
	
	
	die;

}
// $_SESSION['info_message'] = "Sorry couldn't upload your image, please try again.";
// $_SESSION['requested_action'] = FALSE;

// dump($_SESSION);

//The last action to be executed will be the redirect back to profile-images.php
$_SESSION['info_message'] = "Images Uploaded.";
$_SESSION['requested_action'] = TRUE;
header("Location: profile-images.php");
?>