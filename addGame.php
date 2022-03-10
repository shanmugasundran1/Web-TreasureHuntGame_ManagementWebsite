<?php
include("config.php");
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $des = mysqli_real_escape_string($mysqli, $_POST['description']);
    $teams = mysqli_real_escape_string($mysqli, $_POST['teams']);
    $date = mysqli_real_escape_string($mysqli, $_POST['date']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $time = mysqli_real_escape_string($mysqli, $_POST['time']);

    if (!empty($name) || !empty($des) || !empty($teams) || !empty($date) || !empty($email) || !empty($time)) {
        $result = mysqli_query($mysqli, "INSERT INTO game1(name,description,teams,date,email,time) VALUES('$name','$des','$teams','$date','$email' ,'$time')");
        mysqli_close($mysqli);

        header("Location: 6)organizer home.php");
    }
}
?>