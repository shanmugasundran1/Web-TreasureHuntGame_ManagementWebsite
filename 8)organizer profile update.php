<!DOCTYPE html>

<html>

<head>
  <title>SIGNUP ORGANIZATION</title>
  <link href="registerOP.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <link href="http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
</head>

<body>
  <header id="mainheader"> <img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp;

    <a class="cc" href="6)organizer profile.php">HOME</a>
    <a class="cc" href="logout organizer.php">LOGOUT</a>

    <h1 id="mainh1">SHROOVS' HUNT<br>
      <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
    </h1>
    <br>
  </header>
  <div class="main">
    <div class="login-head"> </div>
    <div class="wrap">
      <div class="Regisration">
        <div class="Regisration-head">
          <h2><span></span>UPDATE</h2>

        </div>
        <?php

        include('session organizer.php');
        $id = $loggedin_session;
        $result = mysqli_query($mysqli, "SELECT * FROM regorg WHERE email = '$id'");

        while ($res = mysqli_fetch_array($result)) {
          $fname = $res['fname'];
          $lname = $res['lname'];
          $pnum = $res['pnum'];
        }

        $remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
        if ($remarks == null and $remarks == "") {
          echo ' <div></div> ';
        }
        if ($remarks == 'success') {
          echo ' <div>Registration Success</div> ';
        }
        if ($remarks == 'failed') {
          echo ' <div>Registration Failed!, Email exists</div> ';
        }
        if ($remarks == 'error') {
          echo ' <div>Registration Failed! <br> Error: ' . $_GET['value'] . ' </div> ';
        } else {
        ?>
          <form class="form" name="reg" action="execute up organizer.php" onsubmit="return validateForm()" method="post">
            <input type="text" name="fname" value="<?php echo $fname; ?>" required>
            <input type="text" name="lname" value="<?php echo $lname; ?>" required>
            <input type="text" name="pnum" value="<?php echo $pnum; ?>" required>
            <div class="Remember-me">
              <div class="button">
                <input type="submit" name="submit" value="UPDATE">
              </div>
              <div class="clear"></div>
            </div>
          </form>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>