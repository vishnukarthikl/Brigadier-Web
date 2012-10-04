<?php
//print_r($_REQUEST);

require_once('databaseLogin.php');

//security check to be done before entering data to database

$firstname=$_POST["q1_fullName1"]["first"];
$lastname=$_POST["q1_fullName1"]["last"];
$username=$_POST["q3_userName"];
$password=$_POST["q4_password"];
$email=$_POST["q6_email6"];
$phone=$_POST["q7_phoneNumber"];
$month=$_POST["q8_dateOf"]["month"];
$day=$_POST["q8_dateOf"]["day"];
$year=$_POST["q8_dateOf"]["year"];
$address=$_POST["q9_address9"]["addr_line1"];
$city=$_POST["q9_address9"]["city"];
$pincode=$_POST["q9_address9"]["postal"];
$state=$_POST["q9_address9"]["state"];
$country=$_POST["q9_address9"]["country"];


if($firstname!="")
$result=mysql_query("INSERT INTO `users` ( `firstname`, `lastname`, `username`, `password`, `email`, `phone`, `month`, `day`, `year`, `address`, `city`, `pincode`, `state`, `country`) VALUES ( '$firstname', '$lastname', '$username', MD5('$password'), '$email', '$phone', '$month', '$day', '$year', '$address', '$city', '$pincode', '$state', '$country');");
if($result)
    echo "Registration success";
?>
