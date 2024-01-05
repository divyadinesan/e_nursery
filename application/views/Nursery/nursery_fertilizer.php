<?php

   $this->load->view('Nursery/layout/header');

?>


<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits" style="width: 900px">
				<div class="form-w3agile form1">
					<h3 style="color: green">Add Soil and Fertlizer</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/soil_fertilizer_insert')?>" method="post" enctype="multipart/form-data">
						
						<label>Choose Category Type</label>
						<div >
							<select name="category_type_id" style="width:820px;height: 45px">
								<option>Category Type</option>
								<?php
                                      foreach ($product as $row) {
                                      	
                                      ?>
								<option value="<?php echo $row->category_type_id?>"><?php echo $row->category_type_name?></option>

							
<?php
}
?>


							</select>
							
							<div class="clearfix"></div>
						</div>
						<?php

                           foreach ($fetch as $row1) 
                             	

						?>
	

						<input type="hidden" name="sf_nursery_id" value="<?php echo $row1->id?>">
						<input type="hidden" name="sf_nursery_email" value="<?php echo $row1->email?>"><br>
						<label>Name</label>
						<div class="key">
							
							<input  type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<div class="clearfix"></div>
						</div>
<label>Price</label>
						<div class="key">
							
							<input  type="text" value="Price" name="price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Price';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Description</label>
						<div class="key">
							
							<input  type="text" value="Description" name="discription" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Care</label>
						<div class="key">
							
							<input  type="text" value="Care" name="care" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Planting And Care';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Use</label>
						
						<div class="key">
							
							<input  type="text" value="Use" name="use" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Watering';}" required="">
							<div class="clearfix"></div>
						</div>
						
						<label>Upload Image</label>
						
						<div class="key">
							
							<input  type="file" value="category_type" name="image" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
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
							<h3 class="bars" align="center" style="color: black"><b>Manage Product</b></h3>
						</div>
<div class="bs-docs-example">
							<table class="table table-striped">
								<thead>
									
									 <tr>
            							<th >Sl.No</th>
            							<th> Name</th>
            							<th>Price</th>
            							
            							<th >Discription</th>
            							<th >Care</th>
            							<th >Use</th>
            							<th >Image</th>
            							<th >Email</th>
            							<th >Edit</th>
            							<th >Delete</th>
        							</tr>
								</thead>
								
								<tbody>

									<?php
									$i=1;

                                        foreach ($soil as $row2) 
                                        {
                                          	
                                           if($row2->category_name =='Soil and Fertilizer' OR $row2->category_name =='Planters' OR $row2->category_name =='Pebbles')
                      {

									?>
								
									
          <tr data-expanded="true">
          	<td><?php echo $i?></td>
            <td><?php echo $row2->ps_name?></td>
            <td><?php echo $row2->ps_price?></td>
            <td><?php echo $row2->ps_description?></td>
             <td><?php echo $row2->ps_care?></td>
             <td><?php echo $row2->uses?></td>
         
               <td><?php echo $row2->nursery_email?></td>
                             <td><img style="height: 130px; width: 150px" src="<?php echo base_url('Asset/nursery/plantseed/'.$row2->ps_image)?>"></td>
               <td><a href="<?php echo base_url('index.php/Nurserycontroller/nursery_fertilizer_edit/'.$row2->ps_id)?>"><img style="height: 90px; width: 90px" src="<?php echo base_url('Asset/nursery/images/edit.jpg')?>"></a></td>
               <td><a href="<?php echo base_url('index.php/Nurserycontroller/delete_soilfertliser/'.$row2->ps_id)?>"><img style="height: 50px; width: 50px" src="<?php echo base_url('Asset/nursery/images/delete.png')?>"></a></td>

                
             
           
        </tr>
        
        
         
       
       
									
								</tbody>
								<?php
								}
								$i++;
							}
							?>
							</table>
						</div><br><br>



<?php

     $this->load->view('Nursery/layout/footer');


?>