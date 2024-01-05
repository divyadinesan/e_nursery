<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>E-Nursery</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Plants Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?php echo base_url('Asset/index/css/bootstrap.css')?>">
	<!-- Bootstrap-Core-CSS -->
	<link href="<?php echo base_url('Asset/index/css/css_slider.css')?>" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="<?php echo base_url('Asset/index/css/style.css')?>" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?php echo base_url('Asset/index/css/font-awesome.min.css')?>" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="<?php echo base_url('Asset/index///fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i')?>"
	 rel="stylesheet">
	<link href="<?php echo base_url('Asset/index///fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext')?>" rel="stylesheet">
	<link href="<?php echo base_url('Asset/index///fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext')?>"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<div id="home">
		<!-- header -->
		<header class="header-style fixed-top"><br>
			<div class="container">
				<div class="header d-lg-flex justify-content-between align-items-center">
					<!-- logo -->
					<h1 class="logo text-center">
						<a  style="color: green">E-Nursery<i style="color: green" class="fa fa-pagelines" aria-hidden="true"></i>
						</a>
					</h1><br>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle toogle-2">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li class="active ml-2"><a href="<?php echo base_url('index.php/indexcontroller/index')?>" >Home</a></li>
								<li><a href="#about" >About Us</a></li>
								<li><a href="#contact" >Contact Us</a></li>
								
							
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toggle-drop">Signup <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#" >Signup <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul class="list-unstyled">
										<li><a href="<?php echo base_url('index.php/Admincontroller/admin_login')?>" class="drop-text" >Admin</a></li>
										<li class="my-2"><a href="<?php echo base_url('index.php/Nurserycontroller/login')?>" class="drop-text" >Nursery</a></li>
										<li><a href="<?php echo base_url('index.php/Usercontroller/user_index')?>" class="drop-text" >Customer</a></li>
										<li><a href="<?php echo base_url('index.php/indexcontroller/delivery_boy_login')?>" class="drop-text" >Delivery Boy</a></li>
									</ul>
								</li>
								<!-- 
									<li><a href="#contact" style="padding-left: 140px">Contact Us</a></li> -->

							</ul>

						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul>
					<li>
						<div class="banner-top">
							<div class="container">
								<div class="w3layouts-banner-info text-center">
									<h4 class="stat-text-wthree text-wh mx-auto text-center font-italic mb-sm-5 mb-4">We give you Care tips and Ideas on
				what style suits your garden</h4>
								<!-- 	<p class="text-li mx-auto mt-2"></p>
									<a href="" class="button-style scroll mt-sm-5 mt-4">To plant a garden is to believe in tomorrow</a> -->
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top1">
							<div class="container">
								<div class="w3layouts-banner-info text-center">
									<h3 class="text-wh">Plants For Healthy</h3>
								<!-- 	<p class="text-li mx-auto mt-2">"Don't judge each day by the harvest you reap but by the seeds that you plant." "A beautiful plant is like having a friend around the house." "A man doesn't plant a tree for himself. He plants it for posterity.</p> -->
									
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top2">
							<div class="container">
								<div class="w3layouts-banner-info text-center">
									<h3 class="text-wh">Welcome to Plants</h3>
									<p class="text-li mx-auto mt-2"></p>
									
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top3">
							<div class="container">
								<div class="w3layouts-banner-info text-center">
									<h3 class="text-wh">Plants For Healthy</h3>
									<p class="text-li mx-auto mt-2">.</p>
									<!-- <a href="#about" class="button-style scroll mt-sm-5 mt-4">Read More</a> -->
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="arrows">
					<label for="slides_1"></label>
					<label for="slides_2"></label>
					<label for="slides_3"></label>
					<label for="slides_4"></label>
				</div>
			</div>
			<div class="icon-w3">
				<a href="#about" class="scroll">
					<i class="fa fa-angle-double-down" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main -->

	<!-- about -->
	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 about-left-w3pvt offset-lg-1">
					<div class="main-img">
						<img src="<?php echo base_url('Asset/index/images/ab.jpg')?>" alt="" class="img-fluid pos-aboimg">
						<img src="<?php echo base_url('Asset/index/images/ab2.jpg')?>" alt="" class="img-fluid pos-aboimg2">
					</div>
				</div>
				<div class="col-lg-6 about-right offset-lg-1">
					<h4 class="sub-tittle-w3layouts let">About Us</h4>
					
					<p class="mt-4 mb-5">Our vision is to be the leader of a web-enabled, cost-effective service to individuals and companies globally to enable the planting of trees. Grow-Trees.com wants to allow users to satisfy a private purpose of greeting someone through an eTreeCertificate® while doing social good by planting trees.

Why trees? Tree planting creates low-skill jobs, and trees provide benefits to current and future generations, have a direct impact on carbon reduction, restoring forests, improving wildlife habitats, and upgrading water catchment areas, and offer flowers, fruit fodder and fuel for local communities and all living creatures.

You can plant trees with just a few clicks and gift them to celebrate festivals, birthdays, anniversaries or other special occasions using our personalised e_nursery®. You can send several e-greetings at once, schedule automatic e-greeting deliveries on future dates and upload a picture or a logo to make the greeting even more distinctive. </p>
				
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->

	<!-- services -->
	<div class="serives-agile py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row support-bottom text-center">
				<div class="col-md-4 services-w3ls-grid">
					<i class="fa fa-envira" aria-hidden="true"></i>
					<h4 class="text-wh text-uppercase mt-md-5 mt-4 mb-3">Garden Care</h4>
					
				</div>
				<div class="col-md-4 services-w3ls-grid my-md-0 my-4">
					<i class="fa fa-tree" aria-hidden="true"></i>
					<h4 class="text-wh text-uppercase mt-md-5 mt-4 mb-3">Plant Renovation</h4>
					
				</div>
				<div class="col-md-4 services-w3ls-grid">
					<i class="fa fa-pagelines" aria-hidden="true"></i>
					<h4 class="text-wh text-uppercase mt-md-5 mt-4 mb-3">Always Fresh</h4>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- blog -->
	
	<!-- //blog -->

	<!-- why -->
	<br><br>
	
			</div>
		</div>
	</section>
	<section class="portfolio py-5" id="gallery">
		<div class="container py-xl-5 py-lg-3">
			
			<h3 class="w3ls-title text-center font-weight-bold mb-5">Our <span class="font-weight-light">Categories</span></h3>
			<div class="row pt-4">
				<!-- 	<?php
			//foreach ($product_seed as $rowz) 
			
			?> -->
				<?php
				foreach($category as $row) 
				{
				
				?>
				<?php
                     if($row->category_name =='Soil and Fertilizer' OR $row->category_name =='Planters' OR $row->category_name =='Pebbles')
                     {


                     ?>
				
				<div class="col-md-4 gal-grid-wthree">
					<div class="gallery-demo">
						
							<img src="<?php echo base_url('Asset/nursery/category/'.$row->image)?>" alt=" " class="img-fluid"  style="height: 280px;width: 380px">
						
						
						<div class="caption">
						<div class="team-text">
							<h4 style="font-size: 20px"><?php echo $row->category_name?></h4>
						</div>
						
					</div>
					</div>
				</div>
				<?php
					}
					else
					{

					?>
					<div class="col-md-4 gal-grid-wthree">
					<div class="gallery-demo">
						
							<img src="<?php echo base_url('Asset/nursery/category/'.$row->image)?>" alt=" " class="img-fluid"  style="height: 280px;width: 380px">
						
						
						<div class="caption">
						<div class="team-text">
							<h4 style="font-size: 20px"><?php echo $row->category_name?></h4>
						</div>
						
					</div>
					</div>
				</div>
					<?php
				}
				?>

				<?php
			}
			?>
			
		</div>
	</section><br>
	<!-- //why -->

	<!-- stats-->
	<div class="stats-info py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<h4 class="stat-text-wthree text-wh mx-auto text-center font-italic mb-sm-5 mb-4">E_Nursery<br><h3 class="stat-text-wthree text-wh mx-auto text-center font-italic mb-sm-5 mb-4">2nd Floor, Kuriland Tower, Marar Rd, Thrissur, Kerala 680001</h3><h3 class="stat-text-wthree text-wh mx-auto text-center font-italic mb-sm-5 mb-4">Contact Us : +91 9496852240</h3></h4>
			<div class="row py-5">
				<div class="col-lg-3 col-sm-6 stats-grid-w3-agile">
					<div class="row">
						<div class="col-4 icon-right-w3ls text-sm-left text-center">
							<span class="fa fa-smile-o" data-blast="bgColor"></span>
						</div>
						<div class="col-8">
							<p class="counter font-weight-bold text-wh">1280</p>
							<p class="text-li mt-2" data-blast="color">Happy Customers</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 stats-grid-w3-agile mt-sm-0 mt-4">
					<div class="row">
						<div class="col-4 icon-right-w3ls text-sm-left text-center">
							<span class="fa fa-shield" data-blast="bgColor"></span>
						</div>
						<div class="col-8">
							<p class="counter font-weight-bold text-wh">920</p>
							<p class="text-li mt-2" data-blast="color">Awards Win</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 stats-grid-w3-agile mt-lg-0 mt-4">
					<div class="row">
						<div class="col-4 icon-right-w3ls text-sm-left text-center">
							<span class="fa fa-leaf" data-blast="bgColor"></span>
						</div>
						<div class="col-8">
							<p class="counter font-weight-bold text-wh">1400</p>
							<p class="text-li mt-2" data-blast="color">Products</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 stats-grid-w3-agile mt-lg-0 mt-4">
					<div class="row">
						<div class="col-4 icon-right-w3ls text-sm-left text-center">
							<span class="fa fa-thumbs-o-up" data-blast="bgColor"></span>
						</div>
						<div class="col-8">
							<p class="counter font-weight-bold text-wh">1080</p>
							<p class="text-li mt-2" data-blast="color">Ratings</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //stats -->

	<!-- team -->
	<!-- <div class="team py-5" id="team">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="w3ls-title text-da text-center font-weight-bold mb-5 pb-xl-4">Our <span class="font-weight-light">Team</span></h3>
			<div class="row team-bottom pt-4 text-center">
				<div class="col-lg-3 col-sm-6 team-grid">
					<img src="<?php echo base_url('Asset/index/images/t1.jpg')?>" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Mack Joe</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5">
					<img src="<?php echo base_url('Asset/index/images/t3.jpg')?>" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Cruz Deo</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5">
					<img src="<?php echo base_url('Asset/index/images/t2.jpg')?>" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Rochy Jae</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5">
					<img src="<?php echo base_url('Asset/index/images/t4.jpg')?>" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Rojo Poy</h4>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
	
	
	<footer class="text-center py-4">
		
	</footer>
	

</body>

</html>