<?php
include('session organizer.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <title>ORGANIZER PROFILE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
</head>

<body id="grbody">
  <header id="mainheader"> <img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp;
    <a class="cc" href="logout organizer.php">LOGOUT</a>

    <h1 id="mainh1">SHROOVS' HUNT<br>
      <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
    </h1>
    <br>
  </header>
  <a href="7)organizer profile.php"><img src="images/orgavatar.png" height="60px" width="60px" style="float: right"></a>
  <h3 class="ogohh3"><?php echo $loggedin_session; ?></h3>
  <main>
    <h1 class="ogohtitle">ORGANIZER HOME</h1>
    <div class="ogohdiv1">
      <h2 class="ogohh2">&nbsp; &nbsp; &nbsp; MY PROFILE</h2>
      <?php
      $sql = "SELECT * FROM regorg where id=$loggedin_id";
      $result = mysqli_query($mysqli, $sql);
      ?>
      <?php
      while ($rows = mysqli_fetch_array($result)) {
      ?>
        <form action="" method="POST">
          <div>ID: <?php echo $rows['id']; ?></div>
          <div>Name: <?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></div>
          <div>Organization: <?php echo $rows['oname']; ?></div>
          <div>Phone Number: <?php echo $rows['pnum']; ?></div>
          <div>Email: <?php echo $rows['email']; ?></div>
        </form>
        <div class="ogodbuttons">
          <a class="ogexample_d" href="8)organizer profile update.php" target="_blank">UPDATE</a>
          <a class="ogexample_d" href="delete ac organizer.php">DELETE</a> </div>
    </div>
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