<!DOCTYPE html>
<html lang="en">

<head>
    <title>PLAYER TEAM DESCRIPTION</title>
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

    <a href="7)OrganiserProfile.html"><img src="images/orgavatar.png" height="60px" width="60px" style="float: right"></a>
    <h3 class="ogdohh3">My Profile</h3>

    <main>
        <h1 class="ogdohtitle">ORGANISER HOME</h1>

        <div class="ogdohdiv1">
            <h2 class="ogdohh2">GAME DESCRIPTION</h2>

            <div>

                <?php
                session_start();
                include_once("config.php");
                $onlyname = $mysqli->real_escape_string($_POST['sb']);
                $sql = "SELECT * FROM regteam WHERE tname = ('$onlyname')";
                $result = mysqli_query($mysqli, $sql);
				
                $row = mysqli_fetch_array($result);
				
                echo '<h3 class="ogdoh3">TEAM NAME : ';
                echo $row["tname"];
                echo '</h3>';

                echo '<h3 class="ogdoh3">MEMBER 1 NAME : ';
                echo $row["name1"];
                echo '</h3>';

                echo '<h3 class="ogdoh3">MEMBER 1 E-MAIL : ';
                echo $row["contact1"];
                $_SESSION["regNameplay"] = $row["contact1"];
                echo '</h3>';

                echo '<h3 class="ogdoh3">MEMBER 2 NAME : ';
                echo $row["name2"];
                echo '</h3>';

                echo '<h3 class="ogdoh3">MEMBER 2 E-MAIL : ';
                echo $row["contact2"];
                echo '</h3>';
				
				echo '<h3 class="ogdoh3">MEMBER 3 NAME : ';
                echo $row["name3"];
                echo '</h3>';

                echo '<h3 class="ogdoh3">MEMBER 3 E-MAIL : ';
                echo $row["contact3"];
                echo '</h3>';
				
				
				
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class=\"ogdexample_d\" href=\"14)organizer registered team contact.php?tname=$row[tname]\">CONTACT TEAM</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

                $mysqli->close();
                ?>
            </div>
        </div>
    </main>
</body>

</html>