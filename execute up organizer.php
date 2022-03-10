<?php 
include('config.php');
include('session organizer.php');

$id=$loggedin_id;

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $pnum=$_POST['pnum'];

$sql="UPDATE regorg SET fname='$fname', lname='$lname', pnum='$pnum' WHERE id='$id'";
$result=mysqli_query($mysqli,$sql);
if($result){
	echo " <div align='center'>";
	echo "Account Updated Sucessfully.";
	echo "</div> ";
	header("location: 7)organizer profile.php");
}
else {
	echo "Unable to update your account";
}

?>
