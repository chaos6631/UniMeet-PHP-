<?php

//Establish connection
$connString = "host=localhost port=5432 dbname=group19_db user=group19_admin password=wede19";

$link = pg_connect($connString);

if ($link == FALSE) {
	dump($link);
	die();
}
?>