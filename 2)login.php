<!DOCTYPE html>

<html class="loglogin">
<head>
<meta charset="utf-8">
<title>LOGIN</title>
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
</head>
<header id="mainheader"><img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp;<a class="cc" href="1)home.php">HOME</a><a class="cc" href="3)signup main.php">SIGNUP</a>
  <h1 id="mainh1">SHROOVS' HUNT<br>
    <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
  </h1>
  <br>
</header>

<body class="loglogin" background="sources/black.jpg" >
<h1 class="loglogintitle">LOGIN TO CONTINUE</h1>
<div class="logcontainer">
  <input id="organizer" type="radio" name="tab" checked="checked"/>
  <input id="player" type="radio" name="tab"/>
  <div class="logpages">
	  
    <div class="logpage play">
      <form class="form" action="login check organizer.php" method="post" name="login">
        <?php
		include "login check organizer.php";
        $remarks = isset( $_GET[ 'remark_login' ] ) ? $_GET[ 'remark_login' ] : '';
        if ( $remarks == null and $remarks == "" ) {

        }
        if ( $remarks == 'failed' ) {
            echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
        }
		session_destroy();   
        ?>
        <div class="loginput">
          <div class="logtitle"><i class="material-icons">&nbsp;</i>EMAIL</div>
          <input class="logtext" type="email"  name="email" placeholder="organizer@email.com">
        </div>
        <div class="loginput">
          <div class="logtitle"><i class="material-icons">&nbsp;</i>PASSWORD</div>
          <input class="logtext" type="password" name="password" placeholder="Password">
        </div>
        <div class="loginput">
          <input type="submit" value="LOG IN" name="submit" class="logbutlog"/>
        </div>
      </form>
    </div>
	  
    <div class="logpage play">
      <form class="form" action="login check player.php" method="post" name="login">
        <?php
		include "login check player.php";
        $remarks = isset( $_GET[ 'remark_login' ] ) ? $_GET[ 'remark_login' ] : '';
        if ( $remarks == null and $remarks == "" ) {

        }
        if ( $remarks == 'failed' ) {
            echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
        }
        ?>
        <div class="loginput">
          <div class="logtitle"><i class="material-icons">&nbsp;</i>EMAIL</div>
          <input class="logtext" type="email"  name="email" placeholder="player@email.com">
        </div>
        <div class="loginput">
          <div class="logtitle"><i class="material-icons">&nbsp;</i>PASSWORD</div>
          <input class="logtext" type="password" name="password" placeholder="Password">
        </div>
        <div class="loginput">
          <input type="submit" value="LOG IN" name="submit" class="logbutlog"/>
        </div>
      </form>
    </div>
	  
  </div>
  <div class="logtabs">
    <label class="logtab logtext" for="organizer">Organizer</label>
    <label class="logtab logtext" for="player">Player</label>
  </div>
</div>
</body>
</html>