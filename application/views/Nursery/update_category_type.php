<?php

  $this->load->view('Nursery/layout/header');

?>

<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits" style="width: 900px">
				<div class="form-w3agile form1">
					<h3 style="color: green">Update Category Type</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/edit_category_type')?>" method="post" enctype="multipart/form-data">
						<?php
						foreach ($fetch as $ct) 
						
						?>
					<input  type="hidden" value="<?php echo $ct->category_type_id ?>" name="category_type_id"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" >
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $ct->category_type_name?>" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" >
							<div class="clearfix"></div>
						</div>
						
						
						
						
						
						<img src="<?php echo base_url('Asset/nursery/category_type/'.$ct->c_type_image)?>" style="height: 100px;width: 100px">
						
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
