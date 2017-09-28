<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	error_reporting(0);

	date_default_timezone_set("Asia/Dhaka");

	$ip = $_SERVER['REMOTE_ADDR'];
	$br = $_SERVER['HTTP_USER_AGENT'];

	$info = "IP => $ip ----- Browser => $br";
	$fileName = "ip_" . date("d.m.Y") . '_' . date('H.i.s') . '.txt';

	$file = fopen($fileName, 'wb');

	fwrite($file, $info);
	fclose($file);

	header("Location: http://www.aljazeera.com/");
	exit();

?>
</body>
</html>