<?php
$this->load->view('User/layout/user_header');
?><br><br><br><br><br>

	<section class="" id="why" style="background-image: url('<?php echo base_url('Asset/index/images/2.jpg')?>');">
		<div class="container py-xl-7 py-lg-3">
			<h3 class="w3ls-title text-wh text-center font-weight-bold mb-5">My <span class="font-weight-light"> Profile</span></h3>
			<div class="row contact-form">
				<div class="offset-lg-2"></div>
				<div class="col-lg-8 wthree-form-left">
					<!-- contact form grid -->
					<fieldset class="contact-top1" data-blast="borderColor">
						<legend class="text-wh let text-capitalize">update</legend>
						<form  method="post" class="f-color" action="<?php echo base_url('index.php/Usercontroller/profile_updation')?>">
							<?php

                                foreach ($profile as $Row) 
                                	

							?>

						<input type="hidden" name="id" value="<?php echo $Row->user_id?>">
							<div class="form-group">
								<label for="contactemail">Name</label>
								<input type="text" class="form-control" name="name" id="contactemail" required placeholder="Enter your Email" value="<?php echo  $Row->name ?>">
							</div>
							<div class="form-group">
								<label for="contactemail">Email</label>
								<input type="email" class="form-control" name="email" id="contactemail" required placeholder="Enter your Email" value="<?php echo $Row->email?>">
							</div>
							<div class="form-group">
								<label for="contactemail">Phone</label>
								<input type="text" class="form-control" name="phone" id="contactemail" required placeholder="Enter your Email" value="<?php echo $Row->phone?>">
							</div>
							<div class="form-group">
								<label for="contactemail">Password</label>
								<input type="text" class="form-control" name="password" id="contactemail" required  value="<?php echo $Row->password?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required="">
							</div>
							<div class="form-group">
								<label for="contactemail">Address</label>
								<input type="text" class="form-control" name="Address" id="contactemail" required placeholder="Enter your Password" value="<?php echo $Row->address?>">
							</div>
							<button type="submit" class="btn btn-block" data-blast="bgColor">Submit</button>
						</form>
					</fieldset>
					<!--  //contact form grid ends here -->
				</div>
				<div class="offset-lg-2"></div>
			</div>
			<!-- contact address -->
			
			<!-- //contact address -->
		</div>
	</section>








<?php
$this->load->view('User/layout/user_footer');
?>