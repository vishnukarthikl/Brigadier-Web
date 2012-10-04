<?php 
require_once('databaseLogin.php');
$delete = file_get_contents('php://input');
$query="Delete from contacts where id='$delete'";
$result = mysql_query($query);
if($result)
	echo "success";
else
	echo "failure";
?>