<?php

include_once("config.php");
if (isset($_POST['updateteam'])) 
{
    $tname = mysqli_real_escape_string($mysqli, $_POST['tname']);
	$name1 = mysqli_real_escape_string($mysqli, $_POST['name1']);
	$contact1 = mysqli_real_escape_string($mysqli, $_POST['contact1']);
	$name2 = mysqli_real_escape_string($mysqli, $_POST['name2']);
	$contact2 = mysqli_real_escape_string($mysqli, $_POST['contact2']);
	$name3 = mysqli_real_escape_string($mysqli, $_POST['name3']);
	$contact3 = mysqli_real_escape_string($mysqli, $_POST['contact3']);

    if (empty($tname) || empty($name1) || empty($contact1) || empty($name2) || empty($contact2) || empty($name3) || empty($contact3)) {
        if (empty($tname)) {
            echo "<font color='red'>Team Name is empty.</font><br/>";
        }
        if (empty($name1)) {
            echo "<font color='red'>Member 1 Name is empty.</font><br/>";
        }

        if (empty($contact1)) {
            echo "<font color='red'>Member 1 E-mail is empty.</font><br/>";
        }
        if (empty($name2)) {
            echo "<font color='red'>Member 2 Name is empty.</font><br/>";
        }
        if (empty($contact2)) {
            echo "<font color='red'>Member 2 E-mail is empty.</font><br/>";
        }
        if (empty($name3)) {
            echo "<font color='red'>Member 3 Name is empty.</font><br/>";
        }
		if (empty($contact3)) {
            echo "<font color='red'>Member 3 E-mail is empty.</font><br/>";
        }
    } else {
		
        $result = mysqli_query($mysqli, "UPDATE regteam SET tname='$tname', name1='$name1', contact1='$contact1', name2='$name2', contact2='$contact2', name3='$name3', contact3='$contact3' WHERE tname='$tname'");

        header("Location: 15)player home.php");

        mysqli_close($mysqli);
    }
}
?>

<?php

$tname = $_GET['tname'];

$result = mysqli_query($mysqli, "SELECT * FROM regteam WHERE tname = '$tname'");

while ($res = mysqli_fetch_array($result)) {
    $tname = $res['tname'];
    $name1 = $res['name1'];
    $contact1 = $res['contact1'];
    $name2 = $res['name2'];
    $contact2 = $res['contact2'];
	$name3 = $res['name3'];
    $contact3 = $res['contact3'];

}
?>

<html>

<head>
    <meta charset="utf-8">
    <title>UPDATE GAME</title>
    <link rel="stylesheet" href="../Treasure Hunt/main.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
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

    <div id="grwrapper">
        <h2 id="grtitleRegistration">TEAM UPDATE FORM</h2>
        <form method="post" action="21)player register team update.php">
            <fieldset id="gruserInformation">
                <legend class="grlegend">Team Information</legend>
				
                <div class="grdivInformation">
                    <label class="grlabel" for="username">TEAM NAME:</label>
                    <input type="text" name="tname" value="<?php echo $tname; ?>" class="grinput" placeholder="" autocomplete="off" autofocus="autofocus">
                </div>
				
                <div class="grdivInformation">
                    <label class="grlabel" for="firstName">MEMBER 1 NAME:&nbsp;</label>
                    <input type="text" name="name1" value="<?php echo $name1; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
				
                <div class="grdivInformation">
                    <label class="grlabel" for="lastName">MEMBER 1 E-MAIL:</label>
                    <input type="text" name="contact1" value="<?php echo $contact1; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
				
                <div class="grdivInformation">
                    <label class="grlabel" for="email">MEMBER 2 NAME:</label>
                    <input type="text" name="name2" value="<?php echo $name2; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
				
                <div class="grdivInformation">
                    <label class="grlabel" for="password">MEMBER 2 E-MAIL:</label>
                    <input type="text" name="contact2" value="<?php echo $contact2; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
				
                <div class="grdivInformation">
                    <td><label class="grlabel" for="confirmPassword">MEMBER 3 NAME:</label>
                    <td><input type="text" name="name3" value="<?php echo $name3; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
				
				<div class="grdivInformation">
                    <td><label class="grlabel" for="confirmPassword">MEMBER 3 E-MAIL:</label>
                    <td><input type="text" name="contact3" value="<?php echo $contact3; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
				
                <input type="hidden" name="tname" value=<?php echo $_GET['tname']; ?>>
                <button id="grnextStepBtn" input type="submit" name="updateteam" value="updateteam">UPDATE</button>
            </fieldset>
        </form>
    </div>

</body>

</html>