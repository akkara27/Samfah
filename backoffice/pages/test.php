<html>
<head>
<title>Process Feedback</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<?php
$fname = $_POST["fname"];
$sname = $_POST["sname"];
$email = $_POST["email"];
$phone = $_POST["phone"];

//print "test test $fname $sname $email $phone test test";
$location = "images\pic_door_modern";
$newname = $codename . "." . $array_last[1];
$path = getcwd().DIRECTORY_SEPARATOR;
$newpath = substr($path, 0,22); //path local
$target = $newpath."\\".$location."\\".$newname; //path local
echo $target;
?>



</body>
</html>
