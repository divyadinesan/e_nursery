


<?php

  $this->load->view('Nursery/layout/header');

?>

<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits" style="width: 1000px">
				<div class="form-w3agile form1">
					<h3 style="color: green">Add Plants and Seeds</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/plnt_seed_insert')?>" method="post" enctype="multipart/form-data">
						<label>Category Type</label>

						<div >
							<select name="category_type_id" style="width:919px;height: 45px" >
								
								<?php
                                   foreach ($c_type as $ctype) 
                                   {
                                   	
                                   

								?>
								<div >
								<option value="<?php echo $ctype->category_type_id ?>"><?php echo $ctype->category_type_name?></option>
								</div>
								<?php 
							}
							?>


							</select>
							<div class="clearfix"></div>
						</div>
						<?php
							foreach ($nursery_id as $nursery_id) 
								
						?>

						<input type="hidden" name="nursery_id" value="<?php echo $nursery_id->id?>">
						<input type="hidden" name="nursery_email" value="<?php echo $nursery_id->email?>">
						<br>
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
							
							<input  type="text" value="Description" name="description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Planting And Care</label>
						<div class="key">
							
							<input  type="text" value="Planting And Care" name="p_c" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Planting And Care';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Watering</label>
						<div class="key">
							
							<input  type="text" value="Watering" name="Watering" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Watering';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Soil</label>
						<div class="key">
							
							<input  type="text" value="Soil" name="Soil" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Soil';}" required="">
							<div class="clearfix"></div>
						</div>
						<label>Temperature</label>
						<div class="key">
							
							<input  type="text" value="Temperature" name="Temperature" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Temperature';}" required="">
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
            							<th>Description</th>
            							<th>Planting and Care</th>
            							<th>Watering</th>
            							<th>Soil</th>
            							<th>Temperature</th>
            							<th>Image</th>
            							<th >Edit</th>
            							<th >Delete</th>
        							</tr>
								</thead>
								
								<tbody>
									
          
          	<?php
          $i=1;
			foreach ($psfetch as $row2) 
           {
           	if($row2->category_name=='Gardening' OR $row2->category_name =='Plants' OR $row2->category_name =='Seeds' OR $row2->category_name =='Bulbs')
           	
                      {
          	?>
          	<tr data-expanded="true">
            <td><?php echo $i;?></td>
            <td><?php echo $row2->ps_name?></td>
            <td><?php echo $row2->ps_price?></td>
             <td><?php echo $row2->ps_description?></td>
             <td><?php echo $row2->ps_care?></td>
              <td><?php echo $row2->ps_watering?></td>
               <td><?php echo $row2->ps_soil?></td>
                <td><?php echo $row2->ps_temperature?></td>
                 <td><img style="height: 120px; width: 120px" src="<?php echo base_url('Asset/nursery/plantseed/'.$row2->ps_image)?>"></td>
                  <td><a href="<?php echo base_url('index.php/Nurserycontroller/update_plantseed/'.$row2->ps_id)?>"><img style="height: 70px; width: 70px" src="<?php echo base_url('Asset/nursery/images/edit.jpg')?>"></a></td>
               <td><a href="<?php echo base_url('index.php/Nurserycontroller/delete_plantseed/'.$row2->ps_id)?>"><img style="height: 50px; width: 50px" src="<?php echo base_url('Asset/nursery/images/delete.png')?>"></a></td>

             
           
        </tr>
        <?php
        $i++;
    }

							
							}
							?>
        
         
       
       
									
								</tbody>
							</table>
						</div><br><br>


<?php

   $this->load->view('Nursery/layout/footer');

?>

