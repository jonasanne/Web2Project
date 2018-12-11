<?php
$conn_error = 'Could not connect.'; //If database can't connect, this error wil show up
 
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'root';
$mysql_db = 'lego';
$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
$dbconnect = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
if (mysqli_connect_errno()){
    die($conn_error);
}
 
?>