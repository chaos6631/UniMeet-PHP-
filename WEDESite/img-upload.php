<?php
require_once('inc/constants.php');
require_once('inc/functions.php');
require_once('inc/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	session_start();
	$auth = TRUE;	
	
	/*Checking file type and size*/
	$allowedExt = array("image/jpeg");
	if ((!in_array($_FILES['upload_img']['type'], $allowedExt)) || ($_FILES['upload_img']['size'] > 500000)) {
		$_SESSION['requested_action'] = 0;
		$auth = FALSE;
		$_SESSION['info_message'] = "Sorry we only accept \\\"jpeg\\\" type images that are less than 500kb, please try another image.";				
		
	}	
	if ($_SESSION['images'] >= MAX_USER_IMAGES) {
		$_SESSION['requested_action'] = 0;
		$auth = FALSE;
		$_SESSION['info_message'] = "Sorry you have reached your maximum limit for saved images.";				
	}
	/*Save file if it meets all criteria*/
	if ($auth == TRUE) {
		/*Check if user directory exists, if not create it*/
		$path = IMAGE_FOLDER . $_SESSION['user_id'];
		if (is_dir($path) == FALSE) {
			if (!mkdir($path)) {
				die("unable to create directory");
				// $_SESSION['requested_action'] = 0;
				// $auth = FALSE;
				// $_SESSION['info_message'] = "Sorry we couldn't complete the requested action, please try again.";				
				// exit();
			}
		}
		/*counting total images in directory and incrementing for file name*/
		$userImages = scanUserDirectory($path);
		$count = count($userImages);
		if ($count == 0) {
			$count++;
			$a = 1;
		}else{
			$a = strstr($userImages[$count-1], "-");
			$a = trim($a,".jpg");
			$a = trim($a, "-");				
			$a++;	
		}				
		
		/*-------TESTING--------*/
		// echo "sessionimages = " . $_SESSION['images'] . "max images =" . MAX_USER_IMAGES . "\n";
		// dump($userImages);
		// dump($a);
		// die;				

		/*Setting file name*/
		if ($a < 10) {
			$path = $path . "/" . $_SESSION['user_id'] . "-" . $a . ".jpg";
		}else{
			$path = $path . "/" . $_SESSION['user_id'] . "-" . $a . ".jpg";
		}	
		//Saving file
		if(move_uploaded_file($_FILES['upload_img']['tmp_name'], $path)){
			echo $_SESSION['info_message'] = "Images Uploaded.";
			$_SESSION['requested_action'] = TRUE;		
			$_SESSION['images'] = $count + 1;	
			updateImageCount($count, $_SESSION['user_id']);			
		}else{
			echo $_SESSION['info_message'] = "Sorry couldn't upload your image, please try again.";
			$_SESSION['requested_action'] = 0;
		}	
	}

	/*The last action to be executed will be the redirect back to profile-images.php	*/
	
	header("Location: profile-images.php");
	/*--------TESTING-------*/
	// dump($auth);
	// dump($_SESSION['requested_action']);
	// dump($_SESSION['user_id']);
	// die;//TESTING PURPOSES
}
?>