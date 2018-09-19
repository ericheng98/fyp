<?php
	include 'connection.php';
	echo 123;
	// echo $_SESSION["loggedin"];die;
	session_destroy();
	header( "refresh:2; url=index.php");