<?php 
session_start();
include('config.php');
$email=$_POST['email'];
$result = mysqli_query($mysqli,"SELECT * FROM member WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: 5)signup player.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $pnum=$_POST['pnum'];
 $email=$_POST['email'];
 $password=$_POST['password'];
$newpas = md5($password);

 if(mysqli_query($mysqli,"INSERT INTO member(fname, lname, pnum, email, password)VALUES('$fname', '$lname','$pnum', '$email', '$newpas')")){ 
	header("location: 5)signup player.php?remarks=success");
 }else{
	 $e=mysqli_error($mysqli);
	header("location: 5)signup player.php?remarks=error&value=$e");	 
 }
}
?>