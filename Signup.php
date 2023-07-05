<?php
if(isset($_SESSION['user_id']))
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
		<title>Signup</title>
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
                		<form action="" method="post" enctype="multipart/form-data"><center>
						<h3>Sign Up</h3>	
						<input type="text" name="name" placeholder="Name" class="form-control" required=""><br>
						<input type="email" name="email" placeholder="email" class="form-control" required=""><br>
						<input type="text" name="username" placeholder="User Name" class="form-control" required=""><br>
						<input type="password" name="pass" placeholder="Password" class="form-control" required=""><br>
						Gender: 
						<input type="radio" name="gen" value="Male"> Male /  
						<input type="radio" name="gen" value="Female"> Female
						<br>
						<br>
						Language: 
						<input type="checkbox" name="lag[]" value="Hindi"> Hindi /  
						<input type="checkbox" name="lag[]" value="English"> English /  
						<input type="checkbox" name="lag[]" value="Gujarati"> Gujarati  
						<br>
						<br>
						<input type="file" name="file" class="form-control" required=""><br><br>
						
						<select name="cid" >
							<option>----- Select Country -----</option>
							<?php
							foreach($countries_arr as $c)
							{
							?>
							<option value="<?php echo $c->cid?>"><?php echo $c->cnm?></option>
							<?php	
							}
							?>
						</select>
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
