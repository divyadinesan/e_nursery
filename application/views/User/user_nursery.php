<?php
$this->load->view('User/layout/user_header');
?><br><br>

<section class="portfolio py-5" id="gallery">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="w3ls-title text-center font-weight-bold mb-5">Our <span class="font-weight-light">Nurseries</span></h3>
			<div class="row pt-4">
				<?php
				foreach($nursery as $row) {
				
				?>
				<div class="col-md-4 gal-grid-wthree">
					<div class="gallery-demo">
						<a href="<?php echo base_url('index.php/Usercontroller/user_nursery_product/'.$row->id)?>">
							<img src="<?php echo base_url('Asset/nursery/license/'.$row->liecence)?>" alt=" " class="img-fluid" style="height: 260px;width: 360px">
						</a>
						<input type="hidden" name="nursery_id" value="<?php echo $row->id?>">
						<div class="caption">
						<div class="team-text">
							<h4><?php echo $row->name?></h4><br>
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