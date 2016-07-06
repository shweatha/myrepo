<!DOCTYPE HTML>
<html>
<head>
<title>Taxi booking Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["name"];
$cardno=$_GET["email"];
$sno=$_GET["from2"];
$tm=$_GET["time"];
$da=$_GET["date2"];
$me=$_GET["mess"];

$tk=$_GET["to"];
mysql_connect("localhost","root","");
mysql_select_db("taxi");
mysql_query("insert into arif values('$nm','$cardno','$sno','$tk','$tm','$da','$me')");

?>
</body>
</html>
