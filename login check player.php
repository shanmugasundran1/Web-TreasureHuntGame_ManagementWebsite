<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email=mysqli_real_escape_string($mysqli,$_POST['email']);
	$password=mysqli_real_escape_string($mysqli,$_POST['password']);
    $newstr = md5($password);
	$result = mysqli_query($mysqli,"SELECT * FROM member");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows!=$email) {
		header("location: 5)signup player.php?remark_login=failed");
	}
	$sql="SELECT mem_id FROM member WHERE email='$email' and password='$newstr'";
	$result=mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_array($result);
	$active=$row['active'];
	$count=mysqli_num_rows($result);
	if($count==1) {
		$_SESSION['login_user']=$email;
		header("location: 15)player home.php");
	}
}
?>