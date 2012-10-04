<?php  
require_once('databaseLogin.php');
//$json=$_GET ['json'];
$json = file_get_contents('php://input');
$obj = json_decode($json);
//echo $json;

//Save


if(isset($obj))
{
	$username=$obj->{'UserName'};
	$password=$obj->{'PassWord'};
	if(!empty($username)&&!empty($password))
	{    
		$result=mysql_query("Select count(*) from users where UserName='$username' and PassWord='$password'");
		$row = mysql_fetch_array($result) or die(mysql_error());
		if($row[0]==1)
		echo "true";
		else
		echo "false";
	}
}
else
echo "false";
mysql_close($con);

		//
		//$posts = array($json);
		//$posts = array(1);
		// header('Content-type: application/json');
		//  echo json_encode(array('posts'=>$posts)); 
?>
