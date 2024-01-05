<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>User</title>
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
		<header class="header-style fixed-top">
			<div class="container">
				<div class="header d-lg-flex justify-content-between align-items-center">
					<!-- logo -->
					<h1>
						 <a href="<?php echo base_url('index.php/indexcontroller/index')?>"> <img src="<?php echo base_url('Asset/index/images/home.png')?>"  style="height: 60px;width: 60px;border-radius: 45px;padding-left: 10px"></a>
					</h1>
					<h1 class="logo text-center">
						<a  style="color: green">E-Nursery<i style="color: green" class="fa fa-pagelines" aria-hidden="true"></i>
						</a>
					</h1>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle toogle-2">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								
								<li><a href="#contact" >Sign up</a></li>
								<li><a href="#why" >Sign in</a></li>
								
							
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
									<!-- <p class="text-li mx-auto mt-2">Ut enim ad minim quis nostrud exerci sed do eiusmod tempor incididunt ut
										labore et
										dolore magna aliqua.</p>
									<a href="#about" class="button-style scroll mt-sm-5 mt-4">Read More</a> -->
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top1">
							<div class="container">
								<div class="w3layouts-banner-info text-center">
									<h3 class="text-wh">Plants For Healthy</h3>
									
									
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top2">
							<div class="container">
								<div class="w3layouts-banner-info text-center">
									<h3 class="text-wh">Welcome to Plants</h3>
									
									
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top3">
							<div class="container">
								<div class="w3layouts-banner-info text-center">
									<h3 class="text-wh">Plants For Healthy</h3>
									
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
						<a href="<?php echo base_url('index.php/Usercontroller/user_index')?>">
							<img src="<?php echo base_url('Asset/nursery/category/'.$row->image)?>" alt=" " class="img-fluid"  style="height: 280px;width: 380px">
						</a>
						
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
							<a href="<?php echo base_url('index.php/Usercontroller/user_index')?>">
							<img src="<?php echo base_url('Asset/nursery/category/'.$row->image)?>" alt=" " class="img-fluid"  style="height: 280px;width: 380px">
						</a>
						
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
	
	<section  id="why"style="background-image: url('<?php echo base_url('Asset/index/images/2.jpg')?>');">
		<div class="container py-xl-7 py-lg-3">
			<h3 class="w3ls-title text-wh text-center font-weight-bold mb-5">Sign <span class="font-weight-light">In</span></h3>
			<div class="row contact-form">
				<div class="offset-lg-2"></div>
				<div class="col-lg-8 wthree-form-left">
					
					<fieldset class="contact-top1" data-blast="borderColor">
						<legend class="text-wh let text-capitalize">Login Now</legend>
						<form action="<?php echo base_url('index.php/Usercontroller/user_login_insert')?>" method="post" class="f-color">
							
							<div class="form-group">
								<label for="contactemail">Email</label>
								<input type="email" class="form-control" name="email" id="contactemail" required placeholder="Enter your Email">
							</div>
							
							<div class="form-group">
								<label for="contactemail">Password</label>
								<input type="password" class="form-control" name="password" id="contactemail" required="">
							</div>
							
							<button type="submit" class="btn btn-block" data-blast="bgColor">Submit</button>
						</form>
					</fieldset>
					
				</div>
				<div class="offset-lg-2"></div>
			</div>
		
		</div>
	</section><br>
	
	
			
		</div>
	</section>
	<!-- gallery model-->
	<!-- popup-->
	<div id="gal1" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g1.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal2" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g2.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal3" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g3.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup3 -->
	<!-- popup-->
	<div id="gal4" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g4.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal5" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g5.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal6" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g6.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal7" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g7.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal8" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g8.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal9" class="popup-effect animate">
		<div class="popup">
			<img src="<?php echo base_url('Asset/index/images/g9.jpg')?>" alt="Popup Image" class="img-fluid" />
			<h4 class="p-mask">Plants</h4>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- //gallery -->

	<!-- contact -->
	<section class="" id="contact" style="background-image: url('<?php echo base_url('Asset/index/images/2.jpg')?>');">
		<div class="container py-xl-7 py-lg-3">
			<h3 class="w3ls-title text-wh text-center font-weight-bold mb-5">Sign <span class="font-weight-light">Up</span></h3>
			<div class="row contact-form">
				<div class="offset-lg-2"></div>
				<div class="col-lg-8 wthree-form-left">
					<!-- contact form grid -->
					<fieldset class="contact-top1" data-blast="borderColor">
						<legend class="text-wh let text-capitalize">Register Here</legend>
						<form action="<?php echo base_url('index.php/Usercontroller/user_reg_insrt')?>" method="post" class="f-color">
							<div class="form-group">
								<label for="contactusername">Name</label>
								<input type="text" class="form-control" name="name" id="contactusername" required placeholder="Enter your Name">
							</div>
							<div class="form-group">
								<label for="contactemail">Email</label>
								<input type="email" class="form-control" name="email" id="contactemail" required placeholder="Enter your Email">
							</div>
							<div class="form-group">
								<label for="contactemail">Phone</label>
								<input type="text" class="form-control" name="phone" id="contactemail" required placeholder="Enter your Phone (10 digits)"   autocomplete="off" maxlength="10" pattern="\d{10}"  required=""title="Must have 10 Digits" >
							</div>
							<div class="form-group">
								<label for="contactemail">Password</label>
								<input type="password" class="form-control" name="password" id="contactemail" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required="">
							</div>
							<div class="form-group">
								<label for="contactcomment">Address</label>
								<textarea class="form-control" rows="5" name="address" id="contactcomment" required placeholder="your Address"></textarea>
							</div>
							<button type="submit" class="btn btn-block" data-blast="bgColor">Submit</button>
						</form>
					</fieldset>
					<!--  //contact form grid ends here -->
				</div>
				<div class="offset-lg-2"></div>
			</div>
			<!-- contact address -->
			
			<!-- //contact address -->
		</div>
	</section>
	<!-- //contact -->

	<!-- partners -->
	
	<!-- //partners -->

	<!-- footer -->
	<footer class="text-center py-4">
		<!-- <div class="container py-xl-5 py-4">
			<h3 class="text-da let mb-3">We Provide Best Services</h3>
			<!-- 
			<h2 class="logo2 text-center mt-3">
				<a href="index.html">
					Plants<i class="fa fa-pagelines" aria-hidden="true"></i>
				</a>
			</h2> -->
			<!-- //logo -->
			<!-- address -->
			<!-- <div class="contact-left-footer mt-4">
				
				<ul>
					<li>
						<p>
							<i class="fa fa-map-marker mr-2"></i>345 Setwant natrer, USA
						</p>
					</li>
					<li class="mx-4">
						<p>
							<i class="fa fa-phone mr-2"></i>+1(401) 1234 567.
						</p>
					</li>
					<li>
						<p class="text-wh">
							<i class="fa fa-envelope-open mr-2"></i>
							<a href="mailto:info@example.com">example@gmail.com</a>
						</p>
					</li>
				</ul>
			</div> -->
			<!-- //address -->
			<!-- social icons -->
			<!-- <div class="footercopy-social mt-4">
				<ul>
					<li>
						<a href="#">
							<span class="fa fa-facebook-f"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fa fa-twitter"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-rss"></span>
						</a>
					</li>
					<li class="ml-2">
						<a href="#">
							<span class="fa fa-vk"></span>
						</a>
					</li>
				</ul>
			</div>  -->
			<!-- //social icons -->
			<!-- copyright -->
			<div class="w3l-copy text-center mt-5">
				<p class="text-da">@2023 Codeigniter Web Framework| Trainer : DIVYA M.D| 
					<a href="https://atees.org/">ATEES Industrial Training Pvt Ltd</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</footer>
	<!-- //footer -->

	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

</body>

</html>