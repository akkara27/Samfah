<?php
$serverName = "163.44.198.39";
$userName = "cp650453_samfa";
$userPassword = "Sfwood123";
$dbName = "cp650453_samfa";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	if (!$objCon) {
	echo $objCon->connect_error;
	exit();
	}
?>
