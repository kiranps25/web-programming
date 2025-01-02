<?php
include("db11.php")
?>

<html>
<head>
<title>BOOK DETAIL</title>
</head>
<body>
<center>
<h2>BOOK DETAILS</h2>
<form method="post" action="display11.php">
	<h2>Enter book Details</h2>
	BOOK NO: <input type="number" name="bookno"><br><br>
	BOOK TITLE: <input type="text" name="booktitle"><br><br>
	BOOK EDITION: <input type="number" name="bookedition"><br><br>
	BOOK PUBLISHER: <input type="text" name="bookpub"><br><br>
	<input type="submit" name="submit">
</form>
</center>
</body>
</html>	
