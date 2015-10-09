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
	$output = "";
  $result = pg_query($conn, 'SELECT * FROM ' . $tableName);
  $array = pg_fetch_all($result);
  //$ouput = "\n<select name='$tableName' >\n";
  if (!empty($result)) {
    //Fill dropdown
    foreach ($array as $entry) {
      $selected = ($pre_selected == $entry['value_id'])?" selected=\"selected\"":"";

      // $output .= "\n\t\t\t<option class='selectOptions' ".$selected." id='selects' value='" . $entry['value_id'] . "'>" . $entry['property'] . "</option>";
      $output .= "\n\t\t\t<option class='selectOptions' id='selects' value='" . $entry['value_id'] . "'" . $selected . ">" . $entry['property'] . "</option>";

    } 
    //$output .= "\n</select>"; 

    return $output .= "\n";
  }
	
}
?>