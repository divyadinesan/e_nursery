<?php

  $this->load->view('Nursery/layout/header');

?>

<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3 style="color: green">Update Category</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/category_update')?>" method="post" enctype="multipart/form-data">
						<?php
						foreach ($fetch as $cat) 
						?>
					<input type="hidden" name="category_id" value="<?php echo $cat->category_id?>">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $cat->category_name?>" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
							<div class="clearfix"></div>
						</div>
						<div class="key">

						<img style="height: 140px; width: 335px" src="<?php echo base_url('Asset/nursery/category/'.$cat->image)?>">
						</div>
						
						
						
						
						
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" value="liecence" name="image" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
							<div class="clearfix"></div>
						</div>
						
						<input style="background-color: green" type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>

		<div class="page-header">
						
						</div>
<?php

   $this->load->view('Nursery/layout/footer');

?>