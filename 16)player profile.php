<?php
include( 'session player.php' );
?>
<!DOCTYPE html>
 
<html lang="en">
<head>
<title>PLAYER PROFILE</title>
<meta charset="utf-8">
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
	
	
<style>	
  .rtopen-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: 2px solid rgba(0,227,255,1.00);
  opacity: 0.8;
  position: fixed;
  width: 280px;
	    -webkit-text-fill-color: white;
  -webkit-text-stroke-width: 0.2px;
  -webkit-text-stroke-color: black;
}

.rtform-popup {
  display: none;
  position: fixed;
  top : 390px;
  right : 580px;
  border: 3px solid white ;
  z-index: 9;
  padding-top: 20px;
  width: 350px;	
	background-color: red;
	padding-left: 40px;
}

.rtform-container {
  max-width: 300px;
}

.rtform-container .btn {
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.rtform-container .cancel {
  background-color: black;
	height: 20px;
}

.rtform-container .btn:hover, .rtopen-button:hover {
  opacity: 1;
}
	
	
	</style>
</head>

<body id="grbody">
<header id="mainheader"> <img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp; <a class="cc" href="logout player.php">LOGOUT</a><a class="cc" href="15)player home.php">MY HOME</a>
  <h1 id="mainh1">SHROOVS' HUNT<br>
    <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
  </h1>
  <br>
</header>
<a href="16)player profile.php"><img src="images/playeravatar.png" height="60px" width="60px" style="float: right"></a>
<h3 class="ogohh3"><?php echo $loggedin_session; ?></h3>
<main>
  <h1 class="ogohtitle" style = "padding-left: 180px;">PLAYER HOME</h1>
  <div class="ogohdiv1" style = "background-color: black; opacity: 1">
    <h2 class="ogohh2" style = "color:yellow;">&nbsp; &nbsp; &nbsp; MY PROFILE</h2>
	  <hr style = "color:white; margin-left:-53px">
    <?php
    $sql = "SELECT * FROM member where mem_id=$loggedin_id";
    $result = mysqli_query( $mysqli, $sql );
    ?>
    <?php
    while ( $rows = mysqli_fetch_array( $result ) ) {
        ?>
    <form action="" method="POST">
    <div style="font-size: 20px; color:white; padding-top: 5px;">REGISTRATION ID &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo $rows['mem_id']; ?></div>
    <div style="font-size: 20px; color:white; padding-top: 5px;">E-MAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo $rows['email']; ?></div>
    <div style="font-size: 20px; color:white; padding-top: 5px;">NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></div>
    <div style="font-size: 20px; color:white; padding-top: 5px;">PHONE NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo $rows['pnum']; ?></div>
    </form>
	  <br><br>
	  
	
	  
    <div style = "padding-left : 200px;"> 
		<a class="ogexample_d" href="17)player profile update.php" target="_blank" >UPDATE</a>
		<button style="height:50px; width:180px; padding-bottom: 5px;" onclick="openForm()" class="ogexample_d">DELETE</a>
	</div>
	  
	  <div class="rtform-popup" id="rtmyForm">
  		<form action="/action_page.php" class="rtform-container">
			<p style="font-size: 30px; padding-left: 80px; color:white;">WARNING!</p>
			<p style="font-size: 20px; padding-left: 30px; margin-top: -20px; color:white;">Are you sure want to Delete?</p>
			<button  type="button" class="btn cancel" onclick='window.location.href="delete ac player.php"'>Confirm</button>
			<button  type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
 		</form>
	</div>
	  
	  <script>
		function openForm() {
 		document.getElementById("rtmyForm").style.display = "block";
		}

		function closeForm() {
  		document.getElementById("rtmyForm").style.display = "none";
		}
	</script>
	  
	  
  <?php
  }
  ?>
  </div>
  <br>
  <br>
  </div>
</main>
</body>
</html>