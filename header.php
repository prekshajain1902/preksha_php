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