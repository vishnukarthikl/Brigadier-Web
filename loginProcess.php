<?php
session_start();

    require_once('databaseLogin.php');
   
    function CheckLoginInDB($username,$password)
    {
    $username = $username;
    $pwdmd5 = md5($password);
    $query = "Select username, email from users ".
        " where username='$username' and password='$pwdmd5' ";
    $result = mysql_query($query);
    if(!$result || mysql_num_rows($result) <= 0)
    {
        //$this->HandleError("Error logging in. "."The username or password does not match");
        return false;
    }
    return true;
    }


  		if ($_POST['username']!=""&&$_POST['password']!="") {
  			$username = trim($_POST['username']);
  			$password = trim($_POST['password']);
  			if(!CheckLoginInDB($username,$password))
  			{
  				Header("Location: login.php?error=1");
  			}
  			else
  			{
  				session_start();
  				$_SESSION['user'] = $username;
  				Header("Location: profile.php");
  				 
  			}
  		}
        
    


?>