<?php

  $this->load->view('Nursery/layout/header');

?>

<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits" style="width: 1000px">
				<div class="form-w3agile form1">
					<h3 style="color: green">My Profile</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/nursery_update')?>" method="post" enctype="multipart/form-data">

						<?php
							foreach ($fetch as $row)
							
						?>
					<input type="hidden" name="nursery_id" value="<?php echo $row->id?>">
					<label>Name</label>
						<div class="key">
							
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row->name?>" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value ='<?php echo $row->name?>';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Email</label>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row->email?>" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $row->email?>';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Password</label>
						<div class="key">
							
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row->password?>" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $row->password?>';}" required="">
							<div class="clearfix"></div>
						</div>
							<label>Expertise Since</label>
						<div class="key">
							<!--<i class="fa fa-user" aria-hidden="true"></i>-->
						
							<input  type="text" value="<?php echo $row->experience?>" name="experience" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $row->experience?>';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Location</label>
						<div class="key">
							
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row->location?>" name="location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $row->location?>';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Address</label>
						<div class="key">
							
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row->address?>" name="address" onfocus="this.value = '';" onblur="if (this.value == '<?php echo $row->address?>') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
							<label>Nursery Photo</label><br>
						<img src="<?php echo base_url('Asset/nursery/license/'.$row->liecence)?>" style="height: 100px;width: 150px"><br><br>
						<label>Upload New Image</label><br>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" value="image" name="image" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'image';}" >
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