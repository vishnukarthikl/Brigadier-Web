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

<html lang="en">
<head>
<title>Brigadier, The Call Blocker</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script id="source" language="javascript" type="text/javascript">


//returning from a aync call ??
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
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
</head>
<body id="page2" onLoad="view();">
<div class="body1">
	<div class="body2">
		<div class="body5">	
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
				<h1><a href="index.html" id="logo">Brigadier The Call Blocker</a></h1>
				<nav>
					<ul id="menu">
						<li id="nav1"><a href="index.html">Home<span>Welcome!</span></a></li>
						<li id="nav2" class="active"><a href="Profile.html">Profile<span>Check Out</span></a></li>
						<li id="nav3"><a href="Contacts.html">Contacts<span>Our Address</span></a></li>
					</ul>
				</nav>
				</div>
			</header>
<!-- header end-->
		</div>
		</div>
	</div>
	</div>
	<div class="body3">
		<div class="main">
<!-- content -->
			<article id="content">
				<div class="wrapper">
					<section class="col1">
						<h2 class="under">Your Blacklisted Contacts</h2>
						
						<div class="wrapper">
						
						<div id="output"></div>
						
						</div>
					</section>
					<section class="col2 pad_left1">
					<div class="wrapper">
					<h2 class="under"> - Actions - </h2>
						Welcome
						<?php echo $logged; ?>
						<p>
						<a href="logout.php">Log out</a>
						<a>
						<br> <a href="javascript:add();">Add contacts</a>
						<div id="addResponse"></div> <br>
						
				
					</section>
				</div>
			</article>
		</div>
	</div>
	<div class="body4">
		<div class="main">
			<article id="content2">
				<div class="wrapper">
					<section class="col3">
						<h4>Why Us?</h4>
					</section>
					<section class="col3 pad_left2">
						<h4>Address</h4>
						<ul class="address">
							<li><span>Country:</span>India</li>
							<li><span>City:</span>Coimbatore</li>
							<li><span>Phone:</span>959-748-8884</li>
							<li><span>Email:</span><a href="mailto:">padmalatha.ragu@gmail.com</a></li>
						</ul>
					</section>
					<section class="col3 pad_left2">
						<h4>Follow Us</h4>
						<ul id="icons">
							<li><a href="#"><img src="images/icon1.jpg" alt="">Facebook</a></li>
							<li><a href="#"><img src="images/icon2.jpg" alt="">Twitter</a></li>
						</ul>
					</section>
					<section class="col2 right">
						<h4>Need help?</h4>
						<form id="help" method="post">
							<div>
								<div class="wrapper">
									<input class="input" type="text" value="Type Your Email Here"  onblur="if(this.value=='') this.value='Type Your Email Here'" onFocus="if(this.value =='Type Your Email Here' ) this.value=''" >
								</div>
								<a href="#" class="button" onClick="document.getElementById('newsletter').submit()">Subscribe</a>
							</div>
						</form>
					</section>
				</div>
			</article>
<!-- content end -->
		</div>
	</div>
		<div class="main">
<!-- footer -->
		
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
