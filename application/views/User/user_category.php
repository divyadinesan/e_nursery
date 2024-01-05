<?php
$this->load->view('User/layout/user_header');
?><br><br>

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
						<a href="<?php echo base_url('index.php/Usercontroller/user_category_sf_type/'.$row->category_id)?>">
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
						<a href="<?php echo base_url('index.php/Usercontroller/user_category_type/'.$row->category_id)?>">
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
	</section>
	
<?php
$this->load->view('User/layout/user_footer');
?>