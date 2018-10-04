<?php
	include 'connection.php';
	echo "Thank you for using BullsGaming!";
	// echo $_SESSION["loggedin"];die;
	session_destroy();
	header( "refresh:1; url=index.php");