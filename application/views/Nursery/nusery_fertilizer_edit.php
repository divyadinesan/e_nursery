<?php

   $this->load->view('Nursery/layout/header');

?>


<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits" style="width: 900px">
				<div class="form-w3agile form1">
					<h3 style="color: green">Update Soil and Fertlizer</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/soil_fertilizer_updated')?>" method="post" enctype="multipart/form-data">
						
<?php
foreach ($soilfertilizer as $sf) 

?>

<input  type="hidden" value="<?php echo $sf->ps_id?>" name="product_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" >
							<div class="clearfix">
						
						<label>Name</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $sf->ps_name?>" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" >
							<div class="clearfix"></div>
						</div>
						<label>Price</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $sf->ps_price?>" name="price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Price';}" >
							<div class="clearfix"></div>
						</div>
						<label>Description</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $sf->ps_description?>" name="discription" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description';}" >
							<div class="clearfix"></div>
						</div>
						<label>Care</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $sf->ps_care?>" name="care" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Planting And Care';}" >
							<div class="clearfix"></div>
						</div>
						<label>Use</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $sf->uses?>" name="use" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Watering';}" >
							<div class="clearfix"></div>
						</div>
						
						
						<label>Image</label><br>
						<img src="<?php echo base_url('Asset/nursery/plantseed/'.$sf->ps_image)?>" style="height: 100px;width: 100px">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" value="category_type" name="image" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
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