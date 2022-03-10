<?php
include( 'session player.php' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>PLAYER GAME DESCRIPTION</title>
<meta charset="utf-8">
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
</head>

<body id="grbody">
<header id="mainheader"> <img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp; <a class="cc" href="logout player.php">LOGOUT</a>
  <h1 id="mainh1">SHROOVS' HUNT<br>
    <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
  </h1>
  <br>
</header>
<a href="16)player profile.php"><img src="images/orgavatar.png" height="60px" width="60px" style="float: right"></a>
<h3 class="ogdohh3"><?php echo $loggedin_session; ?></h3>
<main>
  <h1 class="ogdohtitle">PLAYER HOME</h1>
  <div class="ogdohdiv1">
    <h2 class="ogdohh2">GAME DESCRIPTION</h2>
    <div>
      <?php
      error_reporting(0);
      include_once( "config.php" );

      $onlyname = $mysqli->real_escape_string( $_POST[ 'sb' ] );
      $_SESSION[ "gamename" ] = $onlyname;
      $sql = "SELECT * FROM game1 WHERE name = ('$onlyname')";
      $result = mysqli_query( $mysqli, $sql );
      $row = mysqli_fetch_array( $result );
      echo '<h3 class="ogdoh3">GAME NAME : ';
      echo $row[ "name" ];
      echo '</h3>';

      echo '<h3 class="ogdoh3">DATE : ';
      echo $row[ "date" ];
      echo '</h3>';

      echo '<h3 class="ogdoh3">TIME : ';
      echo $row[ "time" ];
      echo '</h3>';

      echo '<h3 class="ogdoh3">NUMBER OF TEAMS : ';
      echo $row[ "teams" ];
      echo '</h3>';

      echo '<h3 class="ogdoh3">DESCRIPTION : ';
      echo $row[ "description" ];
      echo '</h3>';
		
	  echo '<h3 class="ogdoh3">ORGANIZER CONTACT : ';
      echo $row[ "email" ];
      echo '</h3>';
		
    $_SESSION["regNameorg"] = $row["email"];
    
      
      $sql2 = "SELECT regstatus FROM regteam WHERE contact1 = ('$loggedin_session') AND game = '$onlyname'";
      $result = mysqli_query( $mysqli, $sql2 );
      $row = mysqli_fetch_assoc( $result );
      $myStr = $row[ 'regstatus' ];


      if ( $myStr == 0 ) {
          echo '<div class="ogdodbuttons">';
          echo '<a class="ogdexample_d" href="19)player register team.php" target="_blank">REGISTER</a>';
          echo '<a class="ogdexample_d" href="22)player contact organizer.php" target="_blank">CONTACT</a>';
          echo '</div>';
      } else if ( $myStr == 1 ) {
          echo '<div class="ogdodbuttons">';
          echo '<a class="ogdexample_d" href="22)player contact organizer.php" target="_blank">CONTACT</a>';

          $sqlshiva = "SELECT tname FROM regteam WHERE contact1 = ('$loggedin_session')AND game = '$onlyname'";
          $result = $mysqli->query( $sqlshiva );
          $row = mysqli_fetch_array( $result );

          echo '<form method="POST" action="20)player register team info.php">';
          echo '<input class ="ogdexample_d" type="submit" name="sb" value="';
          echo $row[ 'tname' ];
          echo '">';
          echo '</form>';
      }

      $mysqli->close();

      ?>
    </div>
  </div>
</main>
</body>
</html>