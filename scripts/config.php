<?php
date_default_timezone_set( "Europe/Brussels" );

$local = true;
$key = "?key=3058fe9f830ab53859bf5e7668abe35d";
$url = "https://rebrickable.com/api/v3/lego/sets/" + $key;


if ($local) {
	$tmp = 'http://' . $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
	$DB  = substr( $tmp, 0, strripos( $tmp, "/" ) ) . "/scripts/DB_local.php";
}
else {
	$DB = $url;
}
?>
