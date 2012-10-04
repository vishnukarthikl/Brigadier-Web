<?php
session_start();


if(empty($_SESSION['user']))
{
	Header('Location: index.php');
}
$logged=$_SESSION['user'];
require_once('databaseLogin.php');
$name=$_GET['name'];
$number=$_GET['number'];
$query="select id from users where username='$logged'";
$result=mysql_query($query);
$row = mysql_fetch_array($result) or die(mysql_error());
$query="insert into contacts (owner , name , number) values ( '$row[0]' , '$name' , '$number');";
$result=mysql_query($query);
if($result)
	echo "1";
else 
	echo "0";	
?>