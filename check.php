<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_POST['uname'];
	$pword=$_POST['pword'];
	
	$stmt=$conn->prepare("SELECT * FROM loginform WHERE uname = ? AND password = ?");
	$stmt->bind_param("ss",$uname,$pword);
	$stmt->execute();
	$result= $stmt->get_result();
	if($result->num_rows>0)
	{
		session_start();
		$_SESSION['login_user']=$uname;
		header("Location: welcome.php");
	}
	else
	{
		header("Location: main.php? msg=Invalid user or password");
	}
}
?>
