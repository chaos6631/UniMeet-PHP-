<?php

//Establish connection
$connString = "host=localhost port=5432 dbname=? user=? password=?";
$link = pg_connect($connString);

if ($link == FALSE) {
	dump($link);
	die();
}
?>