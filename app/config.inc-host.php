<?php
	$serverName = "mysql.hostinger.in.th";
	$userName = "cp650453_samfa";
	$userPassword = "sfwood123";
	$dbName = "cp650453_samfa";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	if (!$objCon) {
	echo $objCon->connect_error;
	exit();
	}
?>
