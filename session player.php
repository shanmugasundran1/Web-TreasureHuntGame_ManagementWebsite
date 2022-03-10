<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($mysqli,"select email,mem_id from member where email='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['email'];
$loggedin_id=$row['mem_id'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
	echo "Go back";
	header("Location: 5)signup player.php");
}
?>