
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
		
		<!--header-->
		<!--banner-->
		
	<!--banner-->

	<!--content-->

		<div class="content">

				<!--login-->
			<div class="login">
				
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3 style="color: white"> <b>Login To E-Nursery</b> </h3>
						<form action="<?php echo base_url('index.php/Nurserycontroller/login_insert')?>" method="post">
							<label style="color: white">Email Id</label>
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<div class="clearfix"></div>
							</div>
							<label style="color: white">Password</label>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
							<input style="background-color: black;color: white" type="submit" value="Login">
						</form>
					</div>
					<div class="forg">
						
						<a href="<?php echo base_url('index.php/nurserycontroller/register'); ?>" class="forg-right" style="color:white"><b style="font-size: 15px"><button style="background-color:white;color:black;border-radius: 15px">Register Here</button></b></a>
						<div align="center"><br><br>
							<div style="padding-right: 150px">
					<a href="<?php echo base_url('index.php/Indexcontroller/index')?>" ><img src="<?php echo base_url('Asset/nursery/images/ho.png')?>" style="height:60px;width:60px;padding-right: 15px;padding-top: 15px" align="right"></a>
					</div>
					</div>
					<div class="clearfix"></div>
					</div>
					
				</div>
			</div>
				<!--login-->
		</div>
		<!--content-->
		<!---footer--->
					
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
</body>
</html>






























