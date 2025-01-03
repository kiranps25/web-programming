<?php

$servername="localhost";
$username="root";
$password="";
$dbname="login";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection fail: " . $conn->connect_error);
}
$conn->query("
CREATE TABLE IF NOT EXISTS
loginform(id INT AUTO_INCREMENT PRIMARY KEY,
uname VARCHAR(20) NOT NULL UNIQUE,
password VARCHAR(50) NOT NULL)");
$conn->query("INSERT IGNORE INTO loginform(uname,password) VALUES('ceconline','cec@123')");
?>
