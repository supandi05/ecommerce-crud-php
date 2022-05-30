<?php 

session_start();
include 'db.php';
 
$Email = $_POST['Email'];
$Password = md5($_POST['Password']);

$data = mysqli_query($con, "select * from user where email = '$Email' and Password = '$Password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['Email'] = $Email;
	$_SESSION['status'] = "login";
	header("location: ./admin/index.php");
}else{
	header("location: login.php?pesan=gagal");
}



?>