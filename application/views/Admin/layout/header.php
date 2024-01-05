<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>E-Nursery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url('Asset/admin/css/bootstrap.min.css')?>" >
<!-- //bootstrap-css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Custom CSS -->
<link href="<?php echo base_url('Asset/admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Asset/admin/css/style-responsive.css')?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?php echo base_url('Asset/admin///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')?>' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('Asset/admin/css/font.css')?>" type="text/css"/>
<link href="<?php echo base_url('Asset/admin/css/font-awesome.css')?>" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url('Asset/admin/css/morris.css')?>" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo base_url('Asset/admin/css/monthly.css')?>">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo base_url('Asset/admin/js/jquery2.0.3.min.js')?>"></script>
<script src="<?php echo base_url('Asset/admin/js/raphael-min.js')?>"></script>
<script src="<?php echo base_url('Asset/admin/js/morris.js')?>"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a style="padding-top: 4px;padding-left: 11px;padding-bottom: 7px;" class="dropdown-toggle" href="<?php echo base_url('index.php/Admincontroller/logout'); ?>">
                <!-- <img alt="" src="images/2.png"> -->
                <i class="fa fa-key"></i>
                <span class="username">Log Out</span>
                <b class="caret"></b>
            </a>
            
           
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
               
                
               <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>NURSERY</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('index.php/Admincontroller/add_nursery')?>">ADD NURSERY</a></li>
                        <li><a href="<?php echo base_url('index.php/Admincontroller/view_nursery')?>">VIEW NURSERY</a></li>
                        <li><a href="<?php echo base_url('index.php/Admincontroller/verify_nursery')?>">VERIEFY NURSESRY</a></li>
                        
                    </ul>
                </li>
                
               
                <li class="sub-menu">
                    <a href="<?php echo base_url('index.php/Admincontroller/user_details')?>">
                        <i class="fa fa-user"></i>
                        <span>User Details</span>
                    </a>
                  
                </li>
                   <li class="sub-menu">
                   <a href="<?php echo base_url('index.php/Admincontroller/customer_complaint')?>">
                        <i class="fa fa-comments"> customer_complaint</i>
                        <span></span>
                    </a>
                  
                </li>
               
                 <li class="sub-menu">
                   <a href="<?php echo base_url('index.php/Admincontroller/payment_details')?>">
                        <i class="fa fa-credit-card"></i>
                        <span>Payment Details</span>
                    </a>
                  
                </li>
                 <li class="sub-menu">
                   <a href="<?php echo base_url('index.php/Admincontroller/track_order_details')?>">
                        <i class="fa fa-first-order"></i>
                        <span>Track Order Details</span>
                    </a>
                  
                </li>
                 <li class="sub-menu">
                   <a href="<?php echo base_url('index.php/Admincontroller/Change_password')?>">
                        <i class="fa fa-key"></i>
                        <span>Change Password</span>
                    </a>
                  
                </li>
              
                
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">



























































<!--  -->