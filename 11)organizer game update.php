<?php
include_once("config.php");
if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $time = mysqli_real_escape_string($mysqli, $_POST['time']);
    $date = mysqli_real_escape_string($mysqli, $_POST['date']);
    $teams = mysqli_real_escape_string($mysqli, $_POST['teams']);
    $des = mysqli_real_escape_string($mysqli, $_POST['description']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);

    // checking empty fields
    if (empty($name) || empty($date) || empty($time) || empty($teams) || empty($des) || empty($email)) {
        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if (empty($date)) {
            echo "<font color='red'>Date field is empty.</font><br/>";
        }

        if (empty($time)) {
            echo "<font color='red'>Time field is empty.</font><br/>";
        }
        if (empty($teams)) {
            echo "<font color='red'>No. of teams field is empty.</font><br/>";
        }
        if (empty($des)) {
            echo "<font color='red'>Description field is empty.</font><br/>";
        }
        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
    } else {
        //Step 3. Execute the SQL query.
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE game1 SET name = '$name',date='$date',time='$time', description = '$des', email = '$email', teams = '$teams' WHERE name='$name'");

        //redirectig to the display page. In our case, it is index.php
        header("Location: 6)organizer home.php");

        //Step 5: Freeing Resources and Closing Connection using mysqli
        mysqli_close($mysqli);
    }
}
?>

<?php
//getting id from url
$name = $_GET['name'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM game1 WHERE name = '$name'");

while ($res = mysqli_fetch_array($result)) {
    $name = $res['name'];
    $time = $res['time'];
    $date = $res['date'];
    $teams = $res['teams'];
    $des = $res['description'];
    $email = $res['email'];
}
?>

<html>

<head>
    <meta charset="utf-8">
    <title>UPDATE GAME</title>
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

    <div id="grwrapper">
        <h2 id="grtitleRegistration">GAME UPDATE FORM</h2>
        <form method="post" action="11)organizer game update.php">
            <fieldset id="gruserInformation">
                <legend class="grlegend">Team Information</legend>
                <div class="grdivInformation">
                    <label class="grlabel" for="username">GAME NAME:</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="grinput" placeholder="" autocomplete="off" autofocus="autofocus">

                </div>
                <div class="grdivInformation">
                    <label class="grlabel" for="firstName">DESCRIPTION:&nbsp;</label>
                    <input type="text" name="description" value="<?php echo $des; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
                <div class="grdivInformation">
                    <label class="grlabel" for="lastName">NUMBER OF TEAMS:</label>
                    <input type="text" name="teams" value="<?php echo $teams; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
                <div class="grdivInformation">
                    <label class="grlabel" for="email">DATE OF GAME:</label>
                    <input type="text" name="date" value="<?php echo $date; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
                <div class="grdivInformation">
                    <label class="grlabel" for="password">EMAIL:</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
                <div class="grdivInformation">
                    <td><label class="grlabel" for="confirmPassword">TIME:</label>
                    <td><input type="text" name="time" value="<?php echo $time; ?>" class="grinput" placeholder="" autocomplete="off">
                </div>
                <input type="hidden" name="name" value=<?php echo $_GET['name']; ?>>
                <button id="grnextStepBtn" input type="submit" name="update" value="Update">UPDATE</button>
            </fieldset>
        </form>
    </div>

</body>

</html>