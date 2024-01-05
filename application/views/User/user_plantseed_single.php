<?php
$this->load->view('User/layout/user_header');
?>
<section class="about" id="about">
		<div class="container">
			<?php
			foreach ($fetch as $plantseed) {
				# code...
			}
			?>
			<div class="row">
				
				<div class="col-md-4 gal-grid-wthree">
					<div class="gallery-demo">
						<a href="">
							<img src="<?php echo base_url('Asset/nursery/plantseed/'.$plantseed->ps_image)?>" alt=" " class="img-fluid" / style="height: 350px;width: 450px">
						</a>
						
						<div class="caption">
						
						
							
					
						
					</div>
					</div>
				</div>
				<div class="col-lg-6 about-right offset-lg-1">
					
					<h3 class="tittle-w3layouts text-uppercase pr-lg-5 mt-2"><?php echo $plantseed->ps_name?></h3><br>
					<h4>₹<?php echo $plantseed->ps_price?></h4><br>
					<form method="post" action="<?php echo base_url('index.php/Usercontroller/ps_addtocart')?>">
						<label><b>Choose Quantity</b></label><br>
						<select name="quantity" style="width: 120px">
							
							<option value="1">1 qty</option>
							<option value="2">2 qty</option>
							<option value="3">3 qty</option>
							<option value="4">4 qty</option>
							<option value="5">5 qty</option>
							<option value="6">6 qty</option>
							<option value="7">7 qty</option>
							<option value="8">8 qty</option>
							<option value="9">9 qty</option>
							<option value="10">10 qty</option>
						</select><br><br>
						<?php
						foreach ($user as $usr) 
							
						
						?>
					<input type="hidden" name="delivery_boy_email" value="<?php echo $plantseed->delivery_boy_email ?>">
					<input type="hidden" name="category_id" value="<?php echo $plantseed->catgry_id?>">
						<input type="hidden" name="userid" value="<?php echo $usr->user_id?>">
						<input type="hidden" name="useremail" value="<?php echo $usr->email?>">
						<input type="hidden" name="nurseryemail" value="<?php echo $plantseed->email?>">
						<input type="hidden" name="nurseryid" value="<?php echo $plantseed->ps_nursery_id?>">
						<input type="hidden" name="psid" value="<?php echo  $plantseed->ps_id?>">
						<input type="hidden" name="price" value="<?php echo $plantseed->ps_price?>">
						<input type="submit" name="button" value="Add To Cart" style="background-color: green;color: white">
					</form>
					
				</div>

				<section class="w3ls-bnrbtm py-5" id="blog">
		<div class="py-xl-5 py-lg-3">
			<div class="row no-gutters">
				 <ul class="author list-unstyled d-flex">
						<li><img class="img-fluid rounded-circle" src="<?php echo base_url('Asset/nursery/license/'.$plantseed->liecence)?>" alt="" style="height: 120px;width: 200px"></li>
						<li class="ml-4 mt-4"><span><?php echo $plantseed->name?></span><h6 style="color: black"><b><i><?php echo $plantseed->email?></i></b></h6><h6 style="color: 
						black"><?php echo $plantseed->address?></h6></li>
					</ul>
					
					<ul class="timeline">
						<li>
							<a href="#why" class="head-text-w3">Description</a>
							<!-- <a href="#why" class="float-right">21 Nov, 2018</a> -->
							<p><?php echo $plantseed->ps_description?></p>
						</li>
						<li>
							<a href="#why" class="head-text-w3">Planting and Care</a>
							<!-- <a href="#why" class="float-right">26 Nov, 2018</a> -->
							<p><?php echo $plantseed->ps_care?></p>
						</li>
						<li>
							<a href="#why" class="head-text-w3">Watering</a>
							<!-- <a href="#why" class="float-right">30 Nov, 2018</a> -->
							<p><?php echo $plantseed->ps_watering?></p>
						</li>
						<li>
							<a href="#why" class="head-text-w3">Soil</a>
							<!-- <a href="#why" class="float-right">30 Nov, 2018</a> -->
							<p><?php echo $plantseed->ps_soil?></p>
						</li>
						<li>
							<a href="#why" class="head-text-w3">Temperature</a>
							<!-- <a href="#why" class="float-right">30 Nov, 2018</a> -->
							<p><?php echo $plantseed->ps_temperature?></p>
						</li>
					</ul>
				</div>
								
<div class="container py-xl-5 py-4">
			
			<h2 >
				<a href="index.html" style="color: green">
					Review<i class="fa fa-pagelines" aria-hidden="true" style="color: green"></i>
				</a>
			</h2>
			<!-- //logo -->
			<!-- address -->
			<?php
			foreach ($review as $rvew) {
				
			?>
			<div class="footercopy-social mt-4">
				<ul>
					<li>
						<img src="<?php echo base_url('Asset/admin/images/icon.png')?>" style="height: 50px;width: 50px">
						<?php echo $rvew->name?>

					</li>
					
				</ul>
			</div>
			<div class="contact-left-footer mt-4">
				
				<ul>
					
					
					<li>
						<p class="text-wh">
							<i class="fa fa-envelope-open mr-2"></i>
							<a href=""><?php echo $rvew->email?></a>
						</p>
					</li>
					
				</ul>
				
				<h6 class="text-da let mb-3"><?php echo $rvew->rating?><?php echo $rvew->review?></h6>
			</div>
			<?php
		}
		?>
			<!-- //address -->
			<!-- social icons -->
			
			<!-- //social icons -->
			<!-- copyright -->
			
			<!-- //copyright -->
		</div>
			</div>
		</div>

	</section>
			</div>
		</div>
	</section>


<?php
$this->load->view('User/layout/user_footer');
?>