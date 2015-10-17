<?php

//Establish connection

function db_connect()
{
	$connString = "host=" . DB_HOST . " port=5432 dbname=" . DB_NAME . " user=" . DB_USER . " password=" . DB_PASSWORD;

	$conn = pg_connect($connString);

	if ($conn == FALSE) {
		dump($conn);
		die();
	}
	return $conn;
}
$conn = db_connect();

// buildDropdown function with $pre_selected as argument for stickiness
function buildDropDown($tableName, $pre_selected)  {
	//query to array

	global $conn;
  
  $result = pg_prepare($conn, "", 'SELECT * FROM ' . $tableName);
  $result = pg_execute($conn, "", array());
  $array = pg_fetch_all($result);
  // Removing the first value of the array witch is the label or placeholder for each table  
  $label = array_shift($array);  
  $label = $label['property'];
  $output = "<option class='selectOptions' value='' selected disabled>" . $label . "</option>";
  if (!empty($result)) {
    //Fill dropdown
    foreach ($array as $entry) {
      $selected = ($pre_selected == $entry['value_id'])?" selected=\"selected\"":"";

      $output .= "\n\t\t\t<option class='selectOptions' id='selects' value='" . $entry['value_id'] . "'" . $selected . ">" . $entry['property'] . "</option>";
    }
    return $output .= "\n";
    $result = "";
  }
}
//buildRadio function with $pre_selected as argument for stickiness
function buildRadio($tableName, $pre_selected = ""){
  //query to array
  global $conn;  
  $result = pg_prepare($conn, "", 'SELECT * FROM ' . $tableName);
  $result = pg_execute($conn, "", array());
  $array = pg_fetch_all($result); 
  //Removing the first value of the array witch is the label or placeholder for each table
  $label = array_shift($array);
  $label = $label['property'];
  $output = "<label>" . $label ."</label>";
  if (!empty($result)) {
    //Fill dropdown
    foreach ($array as $entry) {
      if (!isset($_POST) and $entry['value_id'] == 1){
        $selected = "checked";
      }else{
        $selected = ($pre_selected == $entry['value_id'])?" checked":"";
        // $selected = "";
      }
      $output .= "\n\t\t\t<input type='radio' name='" . $tableName . "' value='" . $entry['value_id'] . "' " . $selected . ">" . $entry['property'] . "</input>";
    }    
    return $output .= "\n";
  }
}
//buildCheckbox function with $pre_selected as argument for stickiness
function buildCheckbox($tableName, $pre_selected = ""){
  //query to array
  global $conn;  
	$result = pg_prepare($conn, "", 'SELECT * FROM ' . $tableName);
  $result = pg_execute($conn, "", array());  
  $array = pg_fetch_all($result);
  //Removing the first value of the array witch is the label or placeholder for each table
  $label = array_shift($array);
  $label = $label['property'];
  $output = "<label>" . $label ."</label>";
  if (!empty($result)) {
    //Fill dropdown
    foreach ($array as $entry) {      
      $selected = ($pre_selected == $entry['value_id'])?" selected=\"selected\"":"";

      $output .= "\n\t\t\t<input type='checkbox' value='" . $entry['value_id'] . "'" . $selected . ">" . $entry['property'] . "</input>";

    }    
    return $output .= "\n";
  }
}
//getProperty function for displaying user information, boxsizes are small, normal, large.
function getProperty($userID, $propertyID, $tableName){
  //query to array
  global $conn;   
	$result = pg_prepare($conn, "", "SELECT property FROM " . $tableName . " WHERE value_id = '" . $propertyID . "'");
  $result = pg_execute($conn, "", array());
  $value = pg_fetch_result($result, 0, 'property');

  //$output = '<div class="output-box-' . $boxSize .'"><p>' . $value . '</p></div>';
 
  return $value;
}
function getRandomValue($tableName){
  global $conn;
  $result = pg_prepare($conn, "", 'SELECT * FROM ' . $tableName);
  $result = pg_execute($conn, "", array());
  $array = pg_fetch_all($result);
  $removePlaceholder = array_shift($array);
  // Removing the first value of the array witch is the label or placeholder for each table  
  shuffle($array);
  $value = array_shift($array);
  return $value['value_id'];
}

//lastAccess function that updates the users last_access field
function lastAccess(){
  date_default_timezone_set('America/Toronto');
  $time = date('Y-m-d');  
  // $statement = "UPDATE users SET last_access = " . $time . " WHERE user_id = '" . $_SESSION['user_id'] . "'";
  global $conn;
  $update = pg_prepare($conn, "user_update", "UPDATE users SET last_access = $1 WHERE user_id = $2");
  $update = pg_execute($conn, "user_update", array($time, $_SESSION['user_id']));
}
?>