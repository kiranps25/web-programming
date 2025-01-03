<!DOCTYPE html>
<html>
<head>
<title>login</title>
</head>
<body>
<center>
<h2>login</h2>
<form action="check.php" method="POST">
<label>username:</label>
<input type="text" name="uname" required><br><br>
<label>password:</label>
<input type="password" name="pword" required><br><br>
<input type="submit" name="submit" value="Login"><br><br>
</form>
<?php 
if(isset($_GET['msg']))
{
	echo "<p>{$_GET['msg']}</p>";
	
}
?>
</center>
</body>
<html>
