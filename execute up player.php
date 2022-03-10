<?php 
include('config.php');
include('session player.php');

$id=$loggedin_id;

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $pnum=$_POST['pnum'];

$sql="UPDATE member SET fname='$fname', lname='$lname', pnum='$pnum' WHERE mem_id='$id'";
$result=mysqli_query($mysqli,$sql);
if($result){
	header("Location: 16)player profile.php");
}
else {
	echo "Unable to delete Your Account";
}

?>
