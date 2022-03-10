<!DOCTYPE html>
<html>
	<head>
		<title>CONTACT ORGANIZER</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
		 <meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
	
<style>
	
body {
  font-family: Arial, Helvetica, sans-serif;
	background-color: #f2f2f2;
	background-image: url("images/loginbgold.jpg");
	background-size: cover;
}

* {
  box-sizing: border-box;
} 

/* Style inputs */
input[type=text], select, textarea {
  color: white;
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: black;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  margin-left: 200px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  
  background-color: #f2f2f2;
  padding-left: 500px;
  -webkit-text-fill-color: black;
  -webkit-text-stroke-width: 0.2px;
  -webkit-text-stroke-color: black;
  margin-top: -35px;
}

/* Create two columns that float next to eachother */
.column {
	border-radius: 15px;
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
	-webkit-text-fill-color: white;
  -webkit-text-stroke-width: 0.2px;
  -webkit-text-stroke-color: black;
	background-color: black;
	opacity: 0.9;
}
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
	
.formtxt
	{
	  text-align: center;	
		-webkit-text-fill-color: white;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
		font-size: 45px;
	}
	
	#mainheader
{
  background-image: url("images/logincontainer.jpg"); 
  -webkit-text-fill-color: white;
  -webkit-text-stroke-width: 0.2px;
  -webkit-text-stroke-color: black;
}

#mainh1
{
  text-align: center; 
  font-family:'Press Start 2P', cursive;
  font-size: 50px;
  margin-top: -140px;
}
		
.cc
{
  background-color: black;
  color: aliceblue;
  float:right;
  border: 2px solid black;
  padding: 2px;
	text-decoration: none;
}
		
#mainp1
{
  font-size: 13px;
}
</style>
	
</head>
	
<body>
	
	<header id="mainheader">
	  <img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp;
      <a class="cc" href="logout player.php">LOGOUT</a>
      <h1 id="mainh1">SHROOVS' HUNT<br><p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
      </h1>
		<br>
    </header>
	
<h2 class="formtxt">Contact Us</h2>
<div class="container"> 
  <div class="row"> 
    <div class="column">
      <form action="playtest.php" method="post">
        <label for="name">Name</label>
        <input style="background-color:black; " type="text" id="name" name="name" >
        <label for="se">Sender's Email</label>
        <input style="background-color:black; " type="text" id="se" name="se">
        <label for="sub">Subject</label>
        <input style="background-color:black; " type="text" id="sub" name="sub">
        <label for="subject">Message</label>
        <textarea style="background-color:black; height: 200px;" id="subject" name="message" style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
</div>
<br>
  <br>
  
<?php include 'playtest.php';

?>
</body>
</html>
