<?php

  $this->load->view('Nursery/layout/header');

?>

<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3 style="color: green">Update Product</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/product_update')?>" method="post" enctype="multipart/form-data">
					
						
						<br><br>
						<div class="key">
							<select name="category_id">
								<option>Categoryname</option>
								<?php

                           foreach ($category as $row)
                            {
                           	
                           

						?>
								<option value="<?php echo $row->id?>"><?php echo $row->category_name?></option>
								
<?php
				}
				?>

							</select>
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<?php


                               foreach ($product as $row1) 
                               {
                               	
                              

							?>
							<input type="hidden" name="id" value="<?php echo $row1->product_id?>">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row1->p_name?>" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row1->p_price?>" name="price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row1->p_discription1?>" name="discription1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row1->p_discription2?>" name="discription2" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row1->p_discription3?>" name="discription3" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row1->p_discription4?>" name="discription4" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="<?php echo $row1->p_discription5?>" name="discription5" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						


						
						
						
						
						
						<div class="clearfix"><img src="<?php echo base_url('Asset/nursery/product/'.$row1->p_image)?>" style="height: 150px; width: 150px"></div><br><br>
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="file" name="image" >
							
						</div>
						
						<input style="background-color: green" type="submit" value="Submit">
					</form>

					
				</div>

				<?php
			}
			?>
				
			</div>
		</div>
				<!--login-->
		</div>


<?php

   $this->load->view('Nursery/layout/footer');

?>