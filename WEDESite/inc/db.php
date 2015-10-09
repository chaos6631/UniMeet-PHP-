<?php

//Establish connection

function db_connect()
{
	$connString = "host=localhost port=5432 dbname=group19_db user=group19_admin password=wede19";

	$link = pg_connect($connString);

	if ($link == FALSE) {
		dump($link);
		die();
	}
	return $link;
}
$conn = db_connect();
// add add $pre_selected as argument for stickiness
function buildDropdown($tableName, $pre_selected = "")  {
	//query to array
	global $conn;
	$output = "";
  $result = pg_query($conn, 'SELECT * FROM ' . $tableName);
  $array = pg_fetch_all($result);
  $ouput = "\n<select name='$tableName' >\n";
  if (!empty($result)) {
    //Fill dropdown
    foreach ($array as $entry) {
      $selected = ($pre_selected == $entry['value_id'])?" selected=\"selected\"":"";

      $output .= "\n\t<option class='selectOptions' ".$selected." id='selects' value='" . $entry['value_id'] . "'>" . $entry['property'] . "</option>";

    } 
    $output .= "\n</select>"; 

    return $output;
  }
	
}
?>