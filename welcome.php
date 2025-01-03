<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if(!isset($_SESSION['login_user']))
{
	header("Location: main.php?
	msg=Please login first");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
</head>
<body>
<center>
<h1>Welcome, <?php
echo $_SESSION['login_user']; ?><h1>

</center>
</body>
<html>
