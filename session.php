<?php 

	session_start();

	if (!(isset($_SESSION['login_role']))){

		$updates = "You must be logged in first!";

		$url = $_SERVER['REQUEST_URI'];

		$url = ltrim($url,"/");

		echo "<script type='text/javascript'>alert('$updates'); window.location.href='login.php?url=".$url."';</script>";

		exit();

	}

?>