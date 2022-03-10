<?php
session_start();
if(session_destroy()) {
	header("Location: 2)login.php");
}
?>