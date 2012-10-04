<?php


$user = file_get_contents('php://input');
//$obj = json_decode($user);
require_once('databaseLogin.php');
$query="SELECT contacts.id,name, number FROM `contacts`, `users` where contacts.owner=users.id and users.username='$user'";
$result = mysql_query($query);
$i=0;
while($array = mysql_fetch_row($result))
{
    $output[$i++]=$array;
}
echo json_encode($output);

?>
