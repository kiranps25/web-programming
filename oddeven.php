<html>
<heade>
<title>odd even</title>
</head>
<body>
<h2>odd even checker</h2>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
enter a number:<input type="text" name="number">
<input type="submit" value="Check">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="GET")
{
if(isset($_GET["number"])){
$number=$_GET["number"];
if(is_numeric($number)){
if($number%2==0){
echo"<p>{$number} is an even number.</p>";
}
else{
echo"<p>{$number} is an odd number.</p>";
}
}
else{
echo"<p>Please enter a valid number.</p>";
}
}
}
?>
</body>
</html>

