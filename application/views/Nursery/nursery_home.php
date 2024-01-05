<?php

   $this->load->view('Nursery/layout/header');

?>

<div class="banner-w3">
			<div class="demo-1">            
				<div id="example1" class="core-slider core-slider__carousel example_1">
					<div class="core-slider_viewport">
						<div class="core-slider_list">

							
							
								
														
							 <div class="core-slider_item">
								 <img style="-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;"src="<?php echo base_url('Asset/index/images/3.jpg')?>" class="img-responsive" alt="">
							 </div>

						 </div>
					</div>
					
					
				</div>
			</div>
			
			
			<script>
			$('#example1').coreSlider({
			  pauseOnHover: false,
			  interval: 3000,
			  controlNavEnabled: true
			});

			</script>

		</div>	

<?php

  $this->load->view('Nursery/layout/footer');

?>