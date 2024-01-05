<?php
$this->load->view('User/layout/user_header');
?><br><br>
  <div class="team py-5" id="team">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="w3ls-title text-da text-center font-weight-bold mb-5 pb-xl-4">Our <span class="font-weight-light">Team</span></h3>
			<div class="row team-bottom pt-4 text-center">
				
				 <?php
                  foreach($category_type as $rows)
                     {
                        ?>
				<div class="col-lg-3 col-sm-6 team-grid">
					<a href="<?php echo base_url('index.php/Usercontroller/user_soilfertilizer/'.$rows->category_type_id.'/'.$rows->catgry_id)?>">
					<img src="<?php echo base_url('Asset/nursery/category_type/'.$rows->c_type_image)?>" class="img-fluid" alt="" style="border-radius: 50%;height: 200px;width: 200px">
				</a>
					<div class="caption">
						<div class="team-text">
							<h4><?php echo $rows->category_type_name?></h4>
						</div>
						</div>
				</div>
				
				<?php
			}
			?>

				
				</div>
			</div>
		</div>
 







<section class="portfolio py-5" id="gallery">
		<div class="container py-xl-5 py-lg-3">
			<!-- <h3 class="w3ls-title text-center font-weight-bold mb-5">Our <span class="font-weight-light">Nurseries</span></h3> -->
			<div class="row pt-4">
			<?php
			foreach ($fetch as $rows) {
			
			?>
				<div class="col-md-3 gal-grid-wthree">
					<div class="gallery-demo">
						<a href="<?php echo base_url('index.php/Usercontroller/user_soilfertlizer_single/'.$rows->ps_id)?>">
							<img src="<?php echo base_url('Asset/nursery/plantseed/'.$rows->ps_image)?>" alt=" " class="img-fluid" / style="height: 300px;width: 300px">
						</a>
						
						<div class="caption">
						<div class="team-text">
							<h4 style="font-size: 105%"><?php echo $rows->ps_name?></h4><br>
							<h4 style="font-size: 105%">₹<?php echo $rows->ps_price?></h4><br>
						</div>
						
							
					
						
					</div>
					</div>
				</div>
				
				<?php
			}
			?>
			</div>
			
		</div>
	</section>





<?php
$this->load->view('User/layout/user_footer');
?>