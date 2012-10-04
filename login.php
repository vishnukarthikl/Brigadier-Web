
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
<script>
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}


if (getUrlVars()["error"]==true) {
	alert("Login Failure");	
}
function checkDetails()
{
    username=document.getElementById('username').value;
    password=document.getElementById('password').value;
    response=document.getElementById('response');
    if(username=="")
    {
        response.innerHTML="Enter the Username<br>";
        return false;
    }
    else if(password=="")
    {
            response.innerHTML="Enter the password";
            return false;
    }
    return true;
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
<body id="page2">
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
						<li id="nav1" class="active"><a href="index.php">Home<span>Welcome!</span></a></li>
						<li id="nav2"><a href="profile.php">Profile<span>Check Out</span></a></li>
						<li id="nav3"><a href="contacts.php">Contacts<span>Our Address</span></a></li>
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
					<section class="col4">
						<h2 class="under"> - User Login - </h2>
						<div class="wrapper">
							<form accept-charset="UTF-8" method="post" action="loginProcess.php" id="login" onsubmit="return checkDetails();" >
							<input type="hidden" value="1" id="submitted" name="submitted">
                            <div id="login-box-name" style="margin-top:20px;">User Name:</div>
                            <div id="login-box-field" style="margin-top:0px;"><input type="text" class="form-login" maxlength="50" id="username" name="username" /></div>
                            <div id="login-box-name" style="margin-top:20px;">Password:</div>
                            <div id="login-box-field"><input type="password" class="form-login" maxlength="50" id="password" name="password" /></div>
                            <br />
                            <span class="login-box-options"><input type="checkbox" name="1" value="1"> Remember Me <a href="register.php" style="margin-left:30px;">Register</a></span>
                            <br />
                            <p>
                            <div id="response"></div>
                            <br />
                            <input type="submit" id="submit-button" value="Login" />

							</form>
						</div>
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
