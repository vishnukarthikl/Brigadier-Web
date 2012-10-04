<?php
session_start();
if(empty($_SESSION['user']))
{
	Header('Location: index.php');
}
else
{
	$_SESSION['user']="";
	Header('Location: index.php');
}