<?php
session_start();
require_once 'inc/constants.php';
require_once 'inc/db.php';
require_once 'inc/functions.php';
echo "You've reached the profile image update page";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	dump($_POST);
}
// $_SESSION['info_message'] = "Sorry couldn't update your profile image, please try again.";
// $_SESSION['requested_action'] = FALSE;

//The last action to be executed will be the redirect back to profile-images.php
$_SESSION['info_message'] = "Profile Image Updated.";
$_SESSION['requested_action'] = TRUE;
header("Location: profile-images.php");
?>