<?php
error_reporting(0);
include( 'session organizer.php' );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ORGANIZER GAME DETAILS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">

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
    <h3 class="ogdohh3"><?php echo $loggedin_session; ?></h3>

    <main>
        <h1 class="ogdohtitle">ORGANIZER HOME</h1>

        <div class="ogdohdiv1">
            <h2 class="ogdohh2">GAME DESCRIPTION</h2>

            <div>
                <?php
                session_start();
                include_once("config.php");
                $onlyname = $mysqli->real_escape_string($_POST['sb']);
                $sql = "SELECT * FROM game1 WHERE name = ('$onlyname')";
                $result = mysqli_query($mysqli, $sql);
                $row = mysqli_fetch_array($result);
                echo '<h3 class="ogdoh3">GAME NAME : ';
                echo $row['name'];
                $_SESSION["gamename"]= $row['name'];
                
                echo '</h3>';

                echo '<h3 class="ogdoh3">DATE : ';
                echo $row['date'];
                echo '</h3>';

                echo '<h3 class="ogdoh3">TIME : ';
                echo $row['time'];
                echo '</h3>';

                echo '<h3 class="ogdoh3">NUMBER OF TEAMS : ';
                echo $row['teams'];
                echo '</h3>';

                echo '<h3 class="ogdoh3">DESCRIPTION : ';
                echo $row['description'];
                echo '</h3>';
				
				echo '<h3 class="ogdoh3">ORGANIZER CONTACT : ';
                echo $row['email'];
                echo '</h3>';

                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class=\"ogdexample_d\" href=\"11)organizer game update.php?name=$row[name]\" onclick=\"return confirm('Are you sure want to update?')\">UPDATE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo "<a class=\"ogdexample_d\" href=\"organizer game delete.php?name=$row[name]\" onclick=\"return confirm('Are you sure want to delete?')\">Delete</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo "<a class=\"ogdexample_d\" href=\"12)organizer registered team test.php?name=$row[name]\" >REGISTERED TEAMS</a>";
                $mysqli->close();
                ?>
            </div>
        </div>
    </main>
</body>

</html>