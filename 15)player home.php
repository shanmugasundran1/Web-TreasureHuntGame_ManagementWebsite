<?php
include( 'session player.php' );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PLAYER HOME</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: monospace;
            font-size: 15px;
            text-align: left;
        }

        th {
            background-color: #A9A9A9;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body id="grbody">
    <header id="mainheader">
        <img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp;
        <a class="cc" href="logout player.php">LOGOUT</a>

        <h1 id="mainh1">SHROOVS' HUNT<br>
            <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
        </h1>
        <br>
    </header>
    <a href="16)player profile.php"><img src="images/playeravatar.png" height="60px" width="60px" style="float: right"></a>
    <h3 id="phohh3"><?php echo $loggedin_session  ?></h3>
    <main>
        <h1 class="phohtitle">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PLAYER HOME</h1>
        <br>
        <h2 class="phohh2">Upcoming game events</h2>
        <div class="phohdiv1">
            <table>
                <tr>
                </tr>
                <?php
                error_reporting(0);
                include_once("config.php");
                $sql = 'SELECT name FROM game1';
                $result = $mysqli->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $uname[] = $row["name"];
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $mysqli->close();
                foreach ($uname as $value) {
                    echo '<form method="POST" action="18)player game details.php">';
                    echo '<input class ="phexample_c" type="submit" name="sb" value="';
                    echo $value;
                    echo '">';
                    echo "<br><br>";
                    echo '</form>';
                } 
                ?>
            </table>
        </div>
    </main>
</body>

</html>