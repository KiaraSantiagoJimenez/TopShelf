<?php
//Our server is "local host", "root" is our username, "" is our password, "topshelf" is the database we will connect to
$db = mysqli_connect("localhost", "root","","topshelf3");
//check connection
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>