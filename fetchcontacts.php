<?php

session_start();
if(empty($_SESSION['user']))
{
    Header('Location: index.php');        
}
$logged=$_SESSION['user'];
require_once('databaseLogin.php');
$query="SELECT contacts.id,name, number FROM `contacts`, `users` where contacts.owner=users.id and users.username='$logged'";
$result = mysql_query($query);
$i=0;
while($array = mysql_fetch_row($result))
{
    $output[$i++]=$array;
}
echo json_encode($output);

?>
