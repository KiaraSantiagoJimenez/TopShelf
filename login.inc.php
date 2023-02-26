<?php
include("dbconnect.php");
	session_start();

		$password_hash = hash('sha512', $_POST['password']);
		$login_sql="SELECT * FROM usuario WHERE username='".$_POST['username']."' AND password='$password_hash'";
		$login_query=mysqli_query($db, $login_sql);
		if(mysqli_num_rows($login_query)>0) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION["admin"] = "admin";
			header("location:index.php");
		} else {
			header("Location:index.php?page=login.php&error=login");
		}