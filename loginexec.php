<?php
	session_start();
	include("db.php");
	$Username = mysqli_real_escape_string($con, $_POST['Username']);
	$Password = mysqli_real_escape_string($con, $_POST['Password']);

	$h = mysqli_query($con, "select * from user where Username = '$Username' and Password = '$Password'");

	if(mysqli_num_rows($h) == 1){
		$_SESSION["Username"] = $Username;
		header("Location: home.php");
	} else {
		header("Location: login.php");
	}



?>