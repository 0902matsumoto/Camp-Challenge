<!DOCTYPE HTML PUBLIC"-//WSC//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<boby>

<?php

$x=isset($_GET['x'])?$_GET['x']:"";

if($x!=""){

print"$x".'<br/>';
while($x%2==0)
{
$x=$x/2;
print 2;
print "<br/>";
}

while($x%3==0)
{
$x=$x/3;
print 3;
print "<br/>";
}

while($x%5==0)
{
$x=$x/5;
print 5;
print "<br/>";
}

while($x%7==0)
{
$x=$x/7;
print 7;
print "<br/>";
}

if($x>1)print'その他';





}




?>
</body>
</html>