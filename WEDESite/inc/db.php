<?php

//Establish connection

function db_connect()
{
	$connString = "host=localhost port=5432 dbname=group19_db user=group19_admin password=wede19";

	$conn = pg_connect($connString);

	if ($conn == FALSE) {
		dump($conn);
		die();
	}
	return $conn;
}
$conn = db_connect();

// buildDropdown function with $pre_selected as argument for stickiness
function buildDropdown($tableName, $pre_selected = "")  {
	//query to array

	global $conn;
  // $result = pg_query($conn, 'SELECT * FROM ' . $tableName);
  $result = pg_prepare($conn, "dropdown query", 'SELECT * FROM ' . $tableName);
  $result = pg_execute($conn, "dropdown query", array());
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
  }
	
}
//buildRadio function with $pre_selected as argument for stickiness
function buildRadio($tableName, $pre_selected = ""){
  //query to array
  global $conn;  
  $result = pg_prepare($conn, "radio query", 'SELECT * FROM ' . $tableName);
  $result = pg_execute($conn, "radio query", array());
  $array = pg_fetch_all($result); 
  //Removing the first value of the array witch is the label or placeholder for each table
  $label = array_shift($array);
  $label = $label['property'];
  $output = "<label>" . $label ."</label>";
  if (!empty($result)) {
    //Fill dropdown
    foreach ($array as $entry) {      
      $selected = ($pre_selected == $entry['value_id'])?" selected=\"selected\"":"";

      $output .= "\n\t\t\t<input type='radio' value='" . $entry['value_id'] . "'" . $selected . ">" . $entry['property'] . "</input>";

    }    
    return $output .= "\n";
  }
}
//buildCheckbox function with $pre_selected as argument for stickiness
function buildCheckbox($tableName, $pre_selected = ""){
  //query to array
  global $conn;  
	$result = pg_prepare($conn, "checkbox query", 'SELECT * FROM ' . $tableName);
  $result = pg_execute($conn, "checkbox query", array());  
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
function getProperty($userID, $propertyName, $boxSize){
  //query to array
  global $conn;   
	$result = pg_prepare($conn, "property query", "SELECT " . $propertyName . " FROM profiles WHERE user_id = '" . $userID . "'");
  $result = pg_execute($conn, "property query", array());
  $value = pg_fetch_result($result, 0, $propertyName);

  $output = '<div class="output-box-' . $boxSize .'"><p>' . $value . '</p></div>';
 
  return $output;
}
?>