
<!DOCTYPE HTML>
<html>
<head>
<title>E_Nursery</title>
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

 <!--mycart-->
<script type="text/javascript" src="<?php echo base_url('Asset/nursery/js/bootstrap-3.1.1.min.js')?>"></script>
<!-- cart -->
<script src="<?php echo base_url('Asset/nursery/js/simpleCart.min.js')?>"></script>
<!-- cart -->
<style type="text/css">
	body{background-image: url('<?php echo base_url('Asset/index/images/4.jpg')?>'); background-size: 1400px 999px;
  background-repeat: no-repeat;-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}
</style>
</head>
<body>
	<!--header-->
		<div class="header">
			
			
		</div>
		<!--header-->
		<!--banner-->
		
	<!--banner-->

	<!--content-->
		<div class="content">
			
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3 style="color: white"><b>Register Here</b></h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/register_insert')?>" method="post" enctype="multipart/form-data">
						<label style="color: white"><b>Name</b></label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Nursery Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nursery Name';}" required="">
							<div class="clearfix"></div>
						</div>
						<label style="color: white"><b>Email Id</b></label>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="email"  name="email" required="">
							<div class="clearfix" ></div>
						</div>
						<label style="color: white"><b>Password</b></label>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required="">
							<div class="clearfix"></div>
						</div>
						<label style="color: white"><b>Expertise Since</b></label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Expertise Since" name="experience" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expertise Since';}" required="">
							<div class="clearfix"></div>
						</div>
						<label style="color: white"><b>Location</b></label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="location" name="location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<label style="color: white"><b>Address</b></label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="address" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>


<label style="color: white"><b>Delivery Boy Name</b></label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Delivery Boy Name" name="delivery_boy_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Delivery Boy Name';}" required="">
							<div class="clearfix"></div>
						</div>
						<label style="color: white"><b>Delivery Boy Email</b></label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="email" value="Delivery Boy Email" name="delivery_boy_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Delivery Boy Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<label style="color: white"><b>Delivery Boy Password</b></label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Delivery Boy Password" name="delivery_boy_password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Delivery Boy Password';}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required="">
							<div class="clearfix"></div>
						</div>

<label style="color: white"><b>Delivery Boy Driving Licence</b></label>
						<div class="key">
							
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" value="liecence" name="dboy_licence" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<label style="color: white"><b>Delivery Boy Aadhar</b></label>
						<div class="key">
							
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" value="liecence" name="aadhar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>

<label style="color: white">Nursery Image</label>
						<div class="key">
							
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" value="liecence" name="image" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<label style="color: white">Nursery Licence</label>
						<div class="key">
							
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" value="licence" name="licence" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'licence';}" required="">
							<div class="clearfix"></div>
						</div>
						<br>
						<input style="background-color: white;color: black" type="submit" value="Submit">
					</form>
				</div>
				<div>
				<a href="<?php echo base_url('index.php/nurserycontroller/login'); ?>" class="forg-right" style="color:black;color: white"><b style="font-size: 15px"><button style="background-color: white;color: black;border-radius: 15px">Login Now</button></b></a>
				<div style="padding-right: 150px">
					<br><br>
					<a href="<?php echo base_url('index.php/Indexcontroller/index')?>" ><img src="<?php echo base_url('Asset/nursery/images/ho.png')?>" style="height:60px;width:60px;padding-right: 15px;padding-top: 15px" align="right"></a>
					</div>
					</div><br><br><br><br>
			</div>
		</div>
				<!--login-->
		</div>
		<!--content-->
		<!---footer--->
					
					<!---footer--->
					<!--copy-->
					<div class="">
						<div class="container">
							
							
							
						</div>
					</div>
				<!--copy-->
				

</body>
</html>