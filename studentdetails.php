
<html>
<head>
<title>student details</title>
</head>
<body align="center">
<h2> details of student</h2>
<form method="REQUEST" action="<?php echo $_SERVER['PHP_SELF'];?>">
name:<input type="text" name="name"><br><br>
Email id:<input type="text" name="mail"><br><br>
Address:<textarea rows="4" name="adrs"></textarea><br><br>
gender:<input type="radio" value="M" name="gender"><input type="radio" value="F" name="gender"><br><br>
DOB:<input type="date" name="dob"><br><br>
<input type="submit" name="submit"><br><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
	if(isset($_REQUEST["name"],$_REQUEST["mail"],$_REQUEST["adrs"],$_REQUEST["gender"],$_REQUEST["dob"]))
	{
		$name=$_REQUEST["name"];
		$mail=$_REQUEST["mail"];
		$adrs=$_REQUEST["adrs"];
		$gen=$_REQUEST["gender"];
		$dob=$_REQUEST["dob"];
		echo"<br><br> DETAILS:<br><br>";
		
		echo"Name:$name<br>Email id:$mail<br>Address:$adrs<br>Gender:$gen<br>DOB:$dob";
	}
	else
	{
		echo"<p>Please enter values</p>";
	}
}
?>
</body>
</html>
