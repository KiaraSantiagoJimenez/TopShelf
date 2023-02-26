<!doctype html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
/* http://localhost/TopShelf/index.php */
	session_start();
	include("dbconnect.php");
	
	if (isset($_SESSION["admin"])) {
		include_once 'adminheader.php';
		include_once 'adminpanel.php';
	} else {
		include_once 'header.php';
		include_once 'seccontent.php';
	}
	if(!isset($_GET['page'])) {
	} else {
		$page=$_GET['page'];
		include("$page");
	}
?>
	
<?php
	include_once 'footer.php';
?>
