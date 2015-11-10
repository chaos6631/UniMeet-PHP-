<?php
session_start();
require_once 'inc/constants.php';
require_once 'inc/db.php';
require_once 'inc/functions.php';
echo "You've reached the upload image page";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// dump($_POST);
	// dump($_FILES);
}
// $_SESSION['info_message'] = "Sorry couldn't upload your image, please try again.";
// $_SESSION['requested_action'] = FALSE;

// dump($_SESSION);

//The last action to be executed will be the redirect back to profile-images.php
$_SESSION['info_message'] = "Images Uploaded.";
$_SESSION['requested_action'] = TRUE;
header("Location: profile-images.php");
?>