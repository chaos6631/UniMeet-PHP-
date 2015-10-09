<?php 

include_once 'inc/connect.php';

$result = pg_query($link, "SELECT * FROM bodies");
$array = pg_fetch_assoc($result);

var_dump($array);
?>