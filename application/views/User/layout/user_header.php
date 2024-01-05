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
	<style>

 .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
</head>

<body>
	<div id="home">
		<!-- header -->
	<header class="header-style fixed-top">
			<div class="container">
				<div class="header d-lg-flex justify-content-between align-items-center">
					<!-- logo -->
					<h1 align="left">
						<a  style="color: green">E_Nursery<i class="fa fa-pagelines" aria-hidden="true"></i>
						</a>
					</h1>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle toogle-2">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li class="active ml-2"><a href="<?php echo base_url('index.php/Usercontroller/user_category')?>" >Home</a></li>

								<li><a href="<?php echo base_url('index.php/Usercontroller/user_nursery')?>" >Nursery</a></li>

								<li><a href="<?php echo base_url('index.php/Usercontroller/mycart')?>" >My Cart</a></li>

								<li><a href="<?php echo base_url('index.php/Usercontroller/trackorders')?>">Track Orders</a></li>
								
								<li ><b>COMPLAINT</b>
									<ul>
									<li><a href="<?php echo base_url('index.php/Usercontroller/Complaint')?>" >Add Complaint</a></li>
									<li><a href="<?php echo base_url('index.php/Usercontroller/response')?>" > Response</a></li>
								</ul>
							</li>


								<li ><a href="<?php echo base_url('index.php/Usercontroller/user_profile')?>" >My Profile</a></li>
								<li ><a href="<?php echo base_url('index.php/Usercontroller/logout')?>" >Logout</a></li>
								
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<br><br>









