<?php

include("config.php");

$tname = $_GET['tname'];

$result = mysqli_query($mysqli, "DELETE FROM regteam WHERE tname='$tname'");

mysqli_close($mysqli);

header("Location: 15)player home.php");
?>

