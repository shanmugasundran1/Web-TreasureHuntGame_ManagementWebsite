<?php
include("config.php");
if (isset($_POST['submit'])) {
    $game = mysqli_real_escape_string($mysqli, $_POST['game']);
    $tname = mysqli_real_escape_string($mysqli, $_POST['tname']);
	$name1 = mysqli_real_escape_string($mysqli, $_POST['name1']);
	$contact1 = mysqli_real_escape_string($mysqli, $_POST['contact1']);
	$name2 = mysqli_real_escape_string($mysqli, $_POST['name2']);
	$contact2 = mysqli_real_escape_string($mysqli, $_POST['contact2']);
	$name3 = mysqli_real_escape_string($mysqli, $_POST['name3']);
    $contact3 = mysqli_real_escape_string($mysqli, $_POST['contact3']);
    $regstatus = mysqli_real_escape_string($mysqli, $_POST['regstatus']);


    if (!empty($tname) || !empty($name1) || !empty($contact1) || !empty($name2) || !empty($contact2) || !empty($name3) || !empty($contact3)) {
        $result = mysqli_query($mysqli, "INSERT INTO regteam(game, tname, name1, contact1, name2, contact2, name3, contact3, regstatus) VALUES('$game','$tname','$name1','$contact1','$name2','$contact2' ,'$name3', '$contact3', '$regstatus')");
        mysqli_close($mysqli);

        header("Location: 15)player home.php");
    }
}
?>