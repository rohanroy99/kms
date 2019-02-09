
<?php include ('hf.php'); ?>

<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>KMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body class="landing">
    

		
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>


			
		<!-- Banner -->
			<section id="banner">
				<h2>Knowledge Management System</h2>
				<p>get your knowledge boosted up to a different level <br /> by joining us.</p>
				<ul class="actions">
                 <?php if(empty($_SESSION['phpbatch1'])){ ?>
					   <!--<li><a href="login.php" class="button special big">Upload</a></li>
                        <li><a href="signup.php" class="button special big">Download</a></li>-->
                     <?php } else {
						?>
						<li><a href="uploads.php" class="button special big">Upload</a></li>
                    <li><a href="downloads.php" class="button special big">Download</a></li>
						<?php 
					 }?>   
					
				</ul>
			</section>

				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Reviews</h2>
							<p>From Various Colleges</p>
						</header>
						<div class="feature-grid">
							<div class="feature">
								<div class="image rounded"><img src="images/pic04.jpeg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Arijit Shaw</h4>
										<p>arijitshaw.19@gmail.com | BPPIMT</p>
									</header>
									<p>Its a good site for those who want latest books as they arives, here one can upload a books and also download one too .</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic05.jpeg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Rohan Roy</h4>
										<p>ronroy.r@gmail.com | BPPIMT</p>
									</header>
									<p>Still, it’s a way to start, because here you gan get books of your need enough to move on to something more precise.</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic06.jpeg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Joy Halder</h4>
										<p>halderjoy@gmail.com | BPPIMT</p>
									</header>
									<p>Beginners can start their journey from KMS as it is easy to access. Once you get your hands on, start downloading books.</p>
							</div>
                            </div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic07.jpeg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Nabyendu Paul</h4>
										<p>nabyendupaul0@gmail.com | BPPIMT</p>
									</header>
									<p> KMS is easy to access.You can get books as your requirement as well as can upload a book too for others user .</p>
								</div>
							</div>
						</div>
					</div>
				</section>

			 <!--Four -->
				<!--<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Aenean elementum ligula</h2>
							<p>Feugiat sed lorem ipsum magna</p>
						</header>
						<ul class="actions">
							<li><a href="#" class="button special big">Get in touch</a></li>
						</ul>
					</div>
				</section>
-->
		
			

 



  <!-- Modal -->
  
  

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    <?php include ('footer.php'); ?>
	</body>
</html>
