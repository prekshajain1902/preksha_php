<?php
if(isset($_SESSION['user_id']))
{
	
}
else
{
	echo "<script>
	window.location='index';
	</script>";
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
                		<form action="" method="post" enctype="multipart/form-data"><center>
						<h3>Edit</h3>	
						<input type="text" name="name" placeholder="Name" value="<?php echo $fetch->name?>" class="form-control" required=""><br>
						<input type="email" name="email" placeholder="email"value="<?php echo $fetch->email?>" class="form-control" required=""><br>
						<input type="text" name="username" placeholder="User Name" value="<?php echo $fetch->username?>" class="form-control" required=""><br>
						Gender:
						<?php
						$gen=$fetch->gen;
						?>	
						<input type="radio" name="gen" value="Male" <?php 
						if($gen=="Male")
						{
							echo "checked";
						}
						?>> Male /  
						<input type="radio" name="gen" value="Female" <?php 
						if($gen=="Female")
						{
							echo "checked";
						}
						?>> Female
						<br>
						<br>
						<?php
						$lag=$fetch->lag;
						$lag_arr=explode(",",$lag);
						?>
						<br>
						Language:
							
						<input type="checkbox" name="lag[]" value="Hindi" <?php 
						if(in_array("Hindi",$lag_arr))
						{
							echo "checked";
						}
						?>> Hindi /  
						<input type="checkbox" name="lag[]" value="English" <?php 
						if(in_array("English",$lag_arr))
						{
							echo "checked";
						}
						?>> English /  
						<input type="checkbox" name="lag[]" value="Gujarati" <?php
						if(in_array("Gujarati",$lag_arr))
						{
							echo "checked";
						}
						?>> Gujarati  
						<br>
						<br>
						<input type="file" name="file" class="form-control" ><br>
                  <img src="upload/user/<?php echo $fetch->file?>" width="50px" height="50px">
						<br>
						
						<select name="cid" class="form-control" >
							<option>----- Select Country -----</option>
							<?php
							foreach($countries_arr as $c)
							{
								if($c->cid==$fetch->cid)
								{
							?>
								<option value="<?php echo $c->cid?>" selected><?php echo $c->cnm?></option>
							<?php	
								}
								else
								{
								?>
								<option value="<?php echo $c->cid?>"><?php echo $c->cnm?></option>
								<?php	
								}
							}
							?>
						</select>
						<br>
						
						<input type="submit" class="btn btn-warning" name="save" value="save" class="btn1"></center>
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
