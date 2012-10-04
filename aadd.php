<?php 
require_once 'Encryption.php';
require_once 'databaseLogin.php';
$json = file_get_contents('php://input');
$obj = json_decode($json);

if(isset($obj))
{
	$user=$obj->{'sender'};
	$toDecrypt=$obj->{'crypt'};
}



$query="SELECT password from `users` where username='$user'";
$result = mysql_query($query);
while($array=mysql_fetch_row($result))
{
	$hash=$array[0];
}
$mcrypt = new MCrypt($hash);
$toAdd=$mcrypt->decrypt($toDecrypt);
$toAdd=json_decode($toAdd);


$query="SELECT id from `users` where username='$user'";
$result = mysql_query($query);
while($array=mysql_fetch_row($result))
{
	$user=$array[0];
}

for($i=0;$i<count($toAdd);$i++)
{
	$number=$toAdd[$i]->{'number'};
	$name=$toAdd[$i]->{'name'};
	

	$query="INSERT INTO `ucm`.`contacts` (`id`, `owner`, `name`, `number`) VALUES (NULL, '$user', '$name', '$number');";
	if(mysql_query($query))
	{
		echo "success";
	}
	
}


?>