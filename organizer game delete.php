<?php

include("config.php");

$name = $_GET['name'];

$result = mysqli_query($mysqli, "DELETE FROM game1 WHERE name='$name'");

mysqli_close($mysqli);

header("Location: 6)organizer home.php");
?>

