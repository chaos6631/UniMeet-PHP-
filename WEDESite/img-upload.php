<?php
require_once('inc/constants.php');
require_once('inc/functions.php');

echo "You've reached the upload image page";
// dump(getimagesize($_FILES['upload_img']['tmp_name']));
// $path = IMAGE_FOLDER . $_SESSION['user_id'];//TESTING PURPOSES ONLY
// $count = count(scanUserDirectory($path));//TESTING PURPOSES ONLY
// echo $count;//TESTING PURPOSES ONLY
// die;//TESTING PURPOSES ONLY

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	session_start();
	$auth = TRUE;	
	
	/*Checking file type and size*/
	$allowedExt = array("image/jpeg");
	if ((!in_array($_FILES['upload_img']['type'], $allowedExt)) || ($_FILES['upload_img']['size'] > 500000)) {
		$_SESSION['requested_action'] = 0;
		$auth = FALSE;
		$_SESSION['info_message'] = "Sorry we only accept \"jpeg\" type images that are less than 500kb, please try another image.";				
	}	

	/*Save file if it meets all criteria*/
	if ($auth == TRUE) {
		/*Check if user directory exists, if not create it*/
		$path = IMAGE_FOLDER . $_SESSION['user_id'];
		if (is_dir($path) == FALSE) {
			if (!mkdir($path)) {
				die("unable to create directory");
			}
		}
		/*counting total images in directory and incrementing for file name*/
		$count = count(scanUserDirectory($path));
		$count++;
		/*Setting file name*/
		if ($count < 10) {
			$path = $path . "/" . $_SESSION['user_id'] . "-0" . $count . ".jpg";
		}else{
			$path = $path . "/" . $_SESSION['user_id'] . "-" . $count . ".jpg";
		}	
		//Saving file
		if(move_uploaded_file($_FILES['upload_img']['tmp_name'], $path)){
			echo $_SESSION['info_message'] = "Images Uploaded.";
			$_SESSION['requested_action'] = TRUE;			
		}else{
			echo $_SESSION['info_message'] = "Sorry couldn't upload your image, please try again.";
			$_SESSION['requested_action'] = 0;
		}	
	}

	/*The last action to be executed will be the redirect back to profile-images.php	*/
	
	header("Location: profile-images.php");
	// dump($auth);
	// dump($_SESSION['requested_action']);
	// dump($_SESSION['user_id']);
	// die;//TESTING PURPOSES
}
?>
