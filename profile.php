
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
		<style type="text/css">
			
			.content{
				display: flex;
				align-items: center;
				justify-content: center;
				flex-direction: column;
				margin-top: 10px;

			}
			p{
				margin:2px 2px;
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
				
				<div class="team-effect">
					<img src="upload/user/<?php echo $fetch->file?>" alt="img" >
				</div>
                	
					<h3><i class="fas fa-user" aria-hidden="true"></i> <?php echo $fetch->name?></h3>
					<p>ID: <?php echo $fetch->user_id?></p>
					<p>Username: <?php echo $fetch->name?></p>
					<p>Gender: <?php echo $fetch->gen?></p>
					<p><a href="edit?edit_uid=<?php echo $fetch->user_id?>" class="btn btn-primary">Edit</a></p>
				
					</div>
				
		</div>
<!--==============================footer=================================-->
		<?php 
           include_once('footer.php');
		?>
	</body>
</html>
