
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>E-Nursery</title>
<!--css-->
<link href="<?php echo base_url('Asset/nursery/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url('Asset/nursery/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('Asset/nursery/css/font-awesome.css')?>" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo base_url('Asset/nursery/js/jquery.min.js')?>"></script>
<link href='<?php echo base_url('Asset/nursery///fonts.googleapis.com/css?family=Cagliostro')?>' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url('Asset/nursery///fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300')?>' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="<?php echo base_url('Asset/nursery/js/main.js')?>"></script>
<!--search jQuery-->
<script src="<?php echo base_url('Asset/nursery/js/responsiveslides.min.js')?>"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="<?php echo base_url('Asset/nursery/js/bootstrap-3.1.1.min.js')?>"></script>
 <!-- cart -->
<script src="<?php echo base_url('Asset/nursery/js/simpleCart.min.js')?>"></script>
<!-- cart -->
  <!--start-rate-->
<script src="<?php echo base_url('Asset/nursery/js/jstarbox.js')?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('Asset/nursery/css/jstarbox.css')?>" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
</head>
<body>
	<!--header-->
		<div class="header" style="background-color:darkgreen;">
			<div class="header-top"style="background-color:darkgreen;">
				
			</div>
			<div class="heder-bottom"style="background-color:darkgreen;">
				<div class="container"style="background-color:darkgreen;">
					<div class="logo-nav"style="background-color:darkgreen;">

						<div class="logo-nav-left"style="background-color:darkgreen;">
							<h1><a href="<?php echo base_url('index.php/Nurserycontroller/nursery_profile')?>" style="font-family: Cursive;"><marquee>E-Nursery</marquee><span>Shop anywhere</span></a></h1>
						</div>
						
							
						
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<!-- <li class="active"><a href="<?php echo base_url('index.php/Nurserycontroller/nursery_home')?>" class="act">Home</a></li> -->	
									<!-- Mega Menu -->
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-2" >
											<div class="row">
												
												<div class="col-sm-3  multi-gd-img" style="padding-left: 20px">
													<a href="<?php echo base_url('index.php/Nurserycontroller/nursery_category')?>" class="act">
													<ul class="multi-column-dropdown">
														<li style="color: black;font-size: 14px">Category</li>
														
													</ul>
												</a>
												</div>
												
												
											</div>
											<div class="row">
												
												<div class="col-sm-3  multi-gd-img" style="padding-left: 20px">
													<a href="<?php echo base_url('index.php/Nurserycontroller/nursery_category_type')?>" class="act">
													<ul class="multi-column-dropdown">
														<li style="color: black;font-size: 14px">Category Type</li>
														
													</ul>
												</a>
												</div>
												
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Products <b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-2" >
											<div class="row">
												
												<div class="col-sm-3  multi-gd-img" style="padding-left: 20px">
													<a href="<?php echo base_url('index.php/Nurserycontroller/nursery_plant')?>" class="act">
													<ul class="multi-column-dropdown">
														<li style="color: black;font-size: 14px">Plant & Seeds</li>
														
													</ul>
												</a>
												</div>
												
												
												
											</div>
											<div class="row">
											<div class="col-sm-3  multi-gd-img" style="padding-left: 20px">
													<a href="<?php echo base_url('index.php/Nurserycontroller/nursery_fertilizer')?>" class="act">
													<ul class="multi-column-dropdown">
														<li style="color: black;">Planters & Fertilizers</li>
														
													</ul>
												</a>
												</div>
											</div>
											
										</ul>
									</li>
									<li><a href="<?php echo base_url('index.php/Nurserycontroller/user_payment_details')?>">User Payment</a></li>
									<li><a href="<?php echo base_url('index.php/Nurserycontroller/review')?>">Review</a></li>
									<li><a href="<?php echo base_url('index.php/Nurserycontroller/user_Complaints')?>">Complaints</a></li>
									<li><a href="<?php echo base_url('index.php/Nurserycontroller/nursery_profile')?>">My Profile</a></li>
									
									<li style="padding-left: 25px">
										<a href="<?php echo base_url('index.php/Nurserycontroller/logout')?>">
										Logout</a>
									</li>
								</ul>
							</div>
							</nav>
						</div>
	
						
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div