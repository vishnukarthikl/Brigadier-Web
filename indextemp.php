<?php  
//$json=$_GET ['json'];
$json = file_get_contents('php://input');
$obj = json_decode($json);
//echo $json;

//Save
$con = mysql_connect('localhost','root','cr4ckmyp4ss') 
       or die('Cannot connect to the DB');
mysql_select_db('ucm',$con);
$result=mysql_query("Select count(*) from users where UserName='".$obj->{'UserName'}."' and PassWord='".$obj->{'PassWord'}."';");
$row = mysql_fetch_array($result) or die(mysql_error());
if($row[0]==1)
    echo "true";
else
    echo "false";
mysql_close($con);

  //
  //$posts = array($json);
  //$posts = array(1);
  // header('Content-type: application/json');
  //  echo json_encode(array('posts'=>$posts)); 
?>
