<?php
if(isset($_SESSION['user_id']))
{
	
}
else
{
	echo "
		<script>
		window.location='Home';
		</script>
		";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
			<style type="">
				input[type=text], input[type=password],input[type=email]{
    width: 80%;
    margin: 5px 0;
    border-radius: 5px;
    padding: 10px 15px;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #030804;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 80%;
    font-size: 18px;
  }
 input[type=submit]:hover {
    opacity: 0.6;
    cursor: pointer;
  }
			</style>
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<?php
               include_once('header.php');
			?>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h3>Find Us</h3>
						<div class="map">
							<figure>
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
							</figure>
						</div>
					</div>	
					<div class="grid_12">
                		<form action="" method="post" enctype="multipart/form-data"><center>
						<h3>Contact Form</h3>	
						<input type="text" name="name" placeholder="Name" class="form-control"  data-constraints="@Required @JustLetters"><br>
						<input type="email" name="email" placeholder="email" class="form-control" data-constraints="@Required @Email"><br>
						<input type="text" name="mobile" placeholder="Mobile" class="form-control" data-constraints="@Required @JustNumbers"><br>
						<textarea name="message" placeholder="Message" class="form-control" data-constraints='@Required ' style="width: 938px; height: 151px;"></textarea>
						<br>
						
						<input type="submit" class="btn btn-warning" name="submit" value="Submit" class="btn1"></center>
					</form>

					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<?php 
           include_once('footer.php');
		?>
	</body>
</html>
