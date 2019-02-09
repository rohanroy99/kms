<?php include ('config.php') ?>
<link rel="stylesheet" href="assets/css/main.css" />
<!--<style type="text/css">
#header.alt nav a:active, #header.alt nav a:hover {
						color: #F32853;
					}
</style>-->

<!-- Header -->
			<header id="header" class="alt">
<!--				<h1><strong><a href="index.php">Designed</a></strong> by Musketeers</h1>
-->				<nav id="nav">
					<ul>
                    <?php if(empty($_SESSION['phpbatch1'])){ ?>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
                       <!-- <li><a href="contactus.php">Contact Us</a></li>-->
						<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                     <?php } else {
						?>
						<li><a href="index.php">Home</a></li>
					<!--<li><a href="books.php">Books Available</a></li>-->
                       	<li><a href="about.php">About Us</a></li>
                        <li><a href="myaccount.php" >My Account</a></li>
                        <li><a href="logout.php">Log out</a></li>
						<?php 
					 }?>   
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

          
