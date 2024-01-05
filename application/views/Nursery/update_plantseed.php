
<?php

  $this->load->view('Nursery/layout/header');

?>

<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits" style="width: 1000px">
				<div class="form-w3agile form1">
					<h3 style="color: green">Update Plants and Seeds</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/plnt_seed_update')?>" method="post" enctype="multipart/form-data">
						

						

						<?php
						foreach ($plantseed as $fetch) 
							
						?>
					<input  type="hidden" value="<?php echo $fetch->ps_id?>" name="ps_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" >
					<label>Name</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $fetch->ps_name?>" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" >
							<div class="clearfix"></div>
						</div>
						<label>Price</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $fetch->ps_price?>" name="price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Price';}" >
							<div class="clearfix"></div>
						</div>
						<label>Description</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $fetch->ps_description?>" name="description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description';}" >
							<div class="clearfix"></div>
						</div>
						<label>Plant And Care</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $fetch->ps_care?>" name="p_c" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Planting And Care';}" >
							<div class="clearfix"></div>
						</div>
						<label>Watering</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $fetch->ps_watering?>" name="Watering" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Watering';}" >
							<div class="clearfix"></div>
						</div>
						<label>Soil</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $fetch->ps_soil?>" name="Soil" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Soil';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Temperature</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $fetch->ps_temperature?>" name="Temperature" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Temperature';}" >
							<div class="clearfix"></div>
						</div>
						<label>Image</label><br>
						<img src="<?php echo base_url('Asset/nursery/plantseed/'.$fetch->ps_image)?>" style="height: 100px;width: 100px">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" value="" name="image" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
							<div class="clearfix"></div>
						</div>
						
						<input style="background-color: green" type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>


<?php

  $this->load->view('Nursery/layout/footer');

?>