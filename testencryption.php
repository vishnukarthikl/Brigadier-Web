<?php
require_once 'Encryption.php';
require_once 'databaseLogin.php';
$todecypt="";
$query="SELECT password from `users` where username='vishnu'";
$result = mysql_query($query);
while($array=mysql_fetch_row($result))
{
	$hash=$array[0];
}

$mcrypt = new MCrypt($hash);
$toAdd=$mcrypt->decrypt("f30e50860824880c999d6c8a829cc91908f220bc675308a30b64296cd4459788de582b6cbe603393cf9ace0ca68d4346df41340824d584f21cb87d79994ddf75");
echo $toAdd;
?>