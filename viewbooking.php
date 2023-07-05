<?php
if(isset($_SESSION['user_id']))
{
	
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
			<div class="row agile-contact-form">
			
			<div class="col-md-12 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					<center><h3>View Booking </h3></center>
				</div>
				<div>
					<?php
                     if($book_arr){
                        foreach($book_arr as $c)
                        {
                            // $user_id=$c->user_id;
                            // if($_SESSION['user_id']==$user_id)
                            // { 
                    ?>

                    <table width="100%" class="table table-dark">
                    <tr>
                        <td width="50%">Booking ID</td>
                        <td> <?php echo $c->booking_id?></td>
                    </tr>
                        <td>Advertisement ID</td>
                        <td > <?php echo $c->adv_id?></td>
                    </tr>
                        <td>Booking Name</td>
                        <td> <?php echo $c->name?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <?php echo $c->email?></td>
                    </tr>
                    <tr>
                        <td>Mobile Number </td>
                        <td> <?php echo $c->mobile?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td> <?php echo $c->address?></td>
                    </tr>
                    <tr>
                        <td>Booking Date</td>
                        <td> <?php echo $c->created_dt?></td>
                    </tr>
                    <tr></tr>
                   
                    </table>
<br><br>
                    <?php
                           } }
                            else{
                                echo "
                                <script>
                                alert('Sorry.. No booking...');
                                window.location='Home';
                                </script>
                                ";
                            }
                            
                    ?>
				</div>
			</div>
		</div>
	</div>
<!--==============================footer=================================-->
		<?php 
           include_once('footer.php');
		?>
	</body>
</html>
