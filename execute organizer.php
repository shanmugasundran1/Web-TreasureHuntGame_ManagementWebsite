<?php 
session_start();
include('config.php');
$email=$_POST['email'];
$result = mysqli_query($mysqli,"SELECT * FROM regorg WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: 4)signup organizer.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $oname=$_POST['oname'];
 $pnum=$_POST['pnum'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $newpas = md5($password);
	
 if(mysqli_query($mysqli,"INSERT INTO regorg(fname, lname, oname, pnum, email, password)VALUES('$fname', '$lname', '$oname', '$pnum', '$email', '$newpas')")){ 
	header("location: 4)signup organizer.php?remarks=success");
 }else{
	 $e=mysqli_error($mysqli);
	header("location: 4)signup organizer.php?remarks=error&value=$e");	 
 }
}
?>