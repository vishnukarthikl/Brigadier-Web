<?php
session_start();


if(empty($_SESSION['user']))
{
	Header('Location: index.php');
}
$logged=$_SESSION['user'];
require_once('databaseLogin.php');
$query="select id from users where username='$logged'";
$result=mysql_query($query);
$row = mysql_fetch_array($result) or die(mysql_error());
$query="SELECT * FROM contacts where owner='$row[0]'";
$result=mysql_query($query);

$count=mysql_num_rows($result);


if(isset($_POST['delete']))
{
	if (!empty($_POST['checkbox']))
	{
		// allows for unchecked boxes
		foreach($_POST['checkbox'] as $v)
		{
			// deletes check items on created form your mysql
			$del_id = mysql_real_escape_string($v);
			$sql = "DELETE FROM contacts WHERE id ='$del_id'";
			mysql_query($sql);
		}
	}
}


?>

<html>
<head>
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script id="source" language="javascript" type="text/javascript">


//returning from a aync call 
function sendRequestThroughAjax(urlToSend,dataToSend,dataTypeToSend)
{
	var toReturn;
	$.ajax({                                      
	      url: urlToSend ,                 //the script to call to get data          
	      data: dataToSend,                //for example "id=xxx&somethingelse=yyy"
	      dataType: dataTypeToSend,        //data format      
		  async:false,
	      success: function(data)          //on recieve of reply
	      {
	      	 toReturn=data;
	              
	      } 
	    });
  
}

function view() 
{
	//dataReceived=sendRequestThroughAjax('api.php', "", 'json');
	$.ajax({                                      
	      url: 'fetchcontacts.php' ,                 //the script to call to get data          
	      data: "",                //for example "id=xxx&somethingelse=yyy"
	      dataType: 'json',        //data format      
	      success: function(dataReceived)          //on recieve of reply
	      {
	      	toOutput="<table width='400' border='0' cellspacing='1' cellpadding='0'><tr><td><form name='form1' method='post' action=''><table id='contacts' width='400' border='0' cellpadding='3' cellspacing='1' bgcolor='#CCCCCC'><tr><td align='center' bgcolor='#FFFFFF'>#</td><td align='center' bgcolor='#FFFFFF'><strong>Id</strong></td><td align='center' bgcolor='#FFFFFF'><strong>Number</strong></td><td align='center' bgcolor='#FFFFFF'><strong>Name</strong></td></tr>";
      		$('#output').html("");
      		for(i=0;i<dataReceived.length;i++)
      		{
          		contactId=dataReceived[i][0];
          		contactName=dataReceived[i][1];
		        contactNumber=dataReceived[i][2];
          		toOutput+="<tr><td align='center' bgcolor='#FFFFFF'><input name='checkbox[]' type='checkbox' id='checkbox[]' value='"+contactId+"'></td><td bgcolor='#FFFFFF'>"+contactId+"</td><td bgcolor='#FFFFFF'>"+contactNumber+"</td><td bgcolor='#FFFFFF'>"+contactName+"</td></tr>";
          
      		}
     
     		toOutput+="<tr><td colspan='5' align='center' bgcolor='#FFFFFF'><input name='delete' type='submit' name='delete' id='delete' value='Delete'></td></tr></table></form></td></tr></table>";
            $('#output').append(toOutput);
     	  } 
	    });
}

function add()
{
	addresponse=document.getElementById("addResponse");
	addresponse.innerHTML="Number: <input type='text' id='number'/>&nbsp;&nbsp; Name: <input  type='text' id='name'/>&nbsp;&nbsp; <input type='button' value='Add' onclick='addSubmit();' /> &nbsp;&nbsp; <a href='javascript:cancel();'>cancel</a>";
}	

function addSubmit()
{
	number=document.getElementById("number").value;
	name=document.getElementById("name").value;
	if(number=="")
		alert("Don't leave blank value");
	else
	{
			if(name=="")name="unknown";
			tosend="number="+number+"&name="+name;
			dataReceived=sendRequestThroughAjax('addcontact.php', tosend, 'json');
		    addresponse=document.getElementById("addResponse");
		    addresponse.innerHTML="<br>Added Successfully";
			view();
			
		}
}

function cancel()
{
	addresponse=document.getElementById("addResponse");
	addresponse.innerHTML="";
}
 
</script>
<title>Home</title>
</head>
<body onLoad="view();">
	Welcome
	<?php echo $logged; ?>
	<p>
		<a href="logout.php">Log out</a>
	
	
	<p>
		<br> <a href="javascript:add();">Add contacts</a>
			</div>
			<div id="addResponse"></div> <br>
			<div id="output"></div>

</body>
</html>

