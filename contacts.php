<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
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
<body id="page5">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
				<h1><a href="index.html" id="logo">Progress Business Company</a></h1>
				<nav>
					<ul id="menu">
						<li id="nav1"><a href="index.php">Home<span>Welcome!</span></a></li>
						<li id="nav2"><a href="profile.php">Profile<span>Check Out</span></a></li>
						<li id="nav3" class="active"><a href="contacts.php">Contacts<span>Our Address</span></a></li>
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
						<h2 class="under">Contact form</h2>
						<form id="ContactForm" method="post">
						<div>
							<div  class="wrapper">
								<span>Your Name:</span>
								<input type="text" class="input" >
							</div>
							<div  class="wrapper">
								<span>Your City:</span>
								<input type="text" class="input" >
							</div>
							<div  class="wrapper">
								<span>Your E-mail:</span>
								<input type="text" class="input" >
							</div>
							<div  class="textarea_box">
								<span>Your Message:</span>
								<textarea name="textarea" cols="1" rows="1"></textarea>
							</div>
							<a href="#" onClick="document.getElementById('ContactForm').submit()">Send</a>
							<a href="#" onClick="document.getElementById('ContactForm').reset()">Clear</a>
						</div>
					</form>
					</section>
					<section class="col2 pad_left1">
						<h2 class="under">Contacts</h2>
						<div id="address"><span>Country:<br>
								City:<br>
								Telephone:<br>
								Email:</span>
								India<br>
								Coimbatore<br>
								+91-959-748-8884<br>
								<a href="mailto:" class="color2">padmalatha.ragu@gmail.com</a></div>
						<h2 class="under">Miscellaneous</h2>
						<p>.....</p>
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
			<footer>
				<a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website Template</a> by TemplateMonster.com<br>
				<a href="http://www.templates.com/product/3d-models/" target="_blank">3D Models</a> provided by Templates.com
			</footer>
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
	$(document).ready(function() {
		tabs.init();
	})
</script>
</body>
</html>