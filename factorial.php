<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>

<html>
<body>
<form method="post" action="">
enter a number:
<input type="text" name="number">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php

if($_POST){
$number=$_POST['number'];
$n=$number;
$f=1;
for($i=1;$i<=$n;$i++)
{
	$f=$f*$i;
}
echo "factorial of $n is $f";
}
?>
