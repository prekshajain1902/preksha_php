
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
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
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<?php
									if(isset($_SESSION['user_id']))
									{
									?>	
									<li><a href="profile"><?php echo $_SESSION['name']  //session Print ?> </a></li>
									<li><a href="Logout">Logout</a></li>
									<?php 
								    }
								    else
								    {
								    	?>
								    <li><a href="Login">Login</a></li>
									<li><a href="Signup">Signup</a></li>
								    <?php 
							        }
								    ?>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="Home">Home</a></li>
									<li><a href="About">About</a></li>
									<li><a href="Cars">Cars</a></li>
									<li><a href="Services">Services</a></li>
									<li><a href="Contact">Contacts</a></li>

								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>					
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="Home.php">
								<img src="images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			<div class="slider_wrapper ">
				<div id="camera_wrap" class="">
					<div data-src="images/slide.jpg" ></div>
					<div data-src="images/slide1.jpg" ></div>
					<div data-src="images/slide2.jpg"></div>
				</div>
			</div>
			<!-- <div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon1.png" alt="">
								<div class="extra_wrapper">Fast&amp;
									<div class="color1">Safe</div>
								</div>
							</div>
							Dorem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuad
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon2.png" alt="">
								<div class="extra_wrapper">Best
									<div class="color1">Prices</div>
								</div>
							</div>
							Hem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuader
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon3.png" alt="">
								<div class="extra_wrapper">Package
									<div class="color1">Delivery</div>
								</div>
							</div>
							Kurem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuki
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div> -->
			<!-- <div class="c_phone">
				<div class="container_12">
					<div class="grid_12">
						<div class="fa fa-phone"></div>+ 1800 559 6580
						<span>ORDER NOW!</span>
					</div>
					<div class="clear"></div>
				</div>
			</div> -->
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
                		<form action="" method="post" enctype="multipart/form-data"><center>
							<h3>BOOK MY Car</h3>
							<h5><b>Booking</b></h5>
							<br>	

                            <select name="location_id" class="form-outline" required="">
				            <option>----- Select Location -----</option>
				            <?php
				            foreach($location_arr as $i)
				            {
				            ?>
				            <option value="<?php echo $i->location_id?>"><?php echo $i->name?></option>
				            <?php	
				            }
				            ?>
			                </select>	
                            <br><br>
                       <input type="submit" name="search" class="btn btn-primary">
                      <br><br>
                      <?php
			 
			if(!empty($car_arr))
            {
                    foreach ($car_arr as $data)
                    {
			?>	
			
						
			<table width="100%">
				<tr>
					<td rowspan="5" width="500px"><img src="upload/car/<?php echo $data->file?>" width="500px" height="200px"></td><br><br>
					<td>Car Name : <?php echo $data->car_name ?></td>
					<td rowspan="5"><a href="bookingform?booking_id=<?php echo $data->adv_id;?>" class="btn btn-warning">Book</a></td>
				</tr>
				<tr>
					<td >Vehicle Number : <?php echo $data->vehical_number ?></td>
				</tr>
				<tr>
					<td>Address : <?php echo $data->address ?></td>
				</tr>
				<tr>
					<td>Deposite : <?php echo $data->Deposite ?></td>
				</tr>
				<tr >
					<td>Charge(per km) : <?php echo $data->charge ?></td>
				</tr>
				<tr>
					<td colspan="3">-----------------------------------------------------------------------------------------------------------------------</td>
				</tr>
				</table>
			
			
			<?php	
				}} 
				else{
					echo"
					<script>
					alert('no cars....');
					window.location='Home';
					</script>
					";
				}
			
			?>
						</center>
					</form>
					</div>
					<div class="clear"></div>
				</div>
               <br><br>
			<center>	<a href="viewbooking" class="btn btn-warning">View Booking</a></center>
			</div>
		</div>
<!--==============================footer=================================-->
<?php 
include_once('footer.php')
?>
	
	</body>
</html>