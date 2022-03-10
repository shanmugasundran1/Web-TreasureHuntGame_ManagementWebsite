<?php
include('session player.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="contentbox" >
<script type="text/javascript">
function countdown() {
	var i = document.getElementById('timecount');
	if (parseInt(i.innerHTML)<=1) {
		location.href = '5)signup player.php';
	}
	i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
	
<?php
$id=$loggedin_id;
$em = $loggedin_session;
$sql="DELETE FROM member WHERE mem_id='$id'";
$sql2 = "DELETE FROM regteam WHERE contact1 = '$em'";
$result=mysqli_query($mysqli,$sql);
$result = mysqli_query($mysqli, $sql2);
if($result){
	echo " <div align='center'>";
	echo "Account Deleted Sucessfully.";
	echo "</div> ";
	header("Location: 5)signup player.php");
} elseif(!isset($loggedin_session) || $loggedin_session==NULL) {
	header("Location: 5)signup player.php");
} else {
	echo "Unable to delete Your Account";
}
?>
</div>
</body>
</html>
</div>