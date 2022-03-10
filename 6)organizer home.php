<?php
error_reporting(0);
include('session organizer.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ORGANIZER HOME</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
    <style>
    </style>
</head>

<body id="grbody">
    <header id="mainheader">
        <img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp;
        <a class="cc" href="logout organizer.php">LOGOUT</a>
        <h1 id="mainh1">SHROOVS' HUNT<br>
            <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
        </h1>
        <br>
    </header>

    <a href="7)organizer profile.php"><img src="images/orgavatar.png" height="60px" width="60px" style="float: right"></a>
    <h3 id="ohh3">My Profile</h3>

    <main>
        <h1 class="ohtitle">ORGANIZER HOME</h1>
        <div style="position: absolute; padding-left: 500px">
            <h2 class="ohh2" style="padding-left: 500px;">Create a new event ?</h2>
            <div class="button_cont" style="padding-left: 500px;"><a class="example_d" href="9)organizer game create.php" target="_blank">REGISTER HERE</a></div>
        </div>
        
        <div class="ohdiv1">
            <h2 class="ohh2">Upcoming game events</h2>
            <div class="button_cont">
                <?php
                include_once("config.php");

                $sql = "SELECT name FROM game1 WHERE email='$loggedin_session' ";
                $result = $mysqli->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $uname[] = $row["name"];
                    }
                    echo "</table>";
                } else {
                    echo " ";
                }
                $mysqli->close();
                foreach ($uname as $value) {
                    echo '<form method="POST" action="10)organizer game details.php">';
                    echo '<input class ="phexample_c" type="submit" name="sb" value="';
                    echo $value;
                    echo '">';
                    echo "<br><br>";
                    echo '</form>';
                }
                ?>
            </div>
        </div>

    </main>


</body>

</html>