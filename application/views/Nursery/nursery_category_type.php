<?php

  $this->load->view('Nursery/layout/header');

?>

<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits" style="width: 900px">
				<div class="form-w3agile form1">
					<h3 style="color: green">Add Category Type</h3>
					<form action="<?php echo base_url('index.php/Nurserycontroller/category_type_insert')?>" method="post" enctype="multipart/form-data">
						<label>Choose Category Name</label>
						<div class="key">
							<select name="category_id" style="width:815px;height: 45px">
								<option>Categoryname</option>
								<?php
                                   foreach ($category as $row) 
                                   {
                                   	
                                   

								?>
								<option value="<?php echo $row->category_id?>"><?php echo $row->category_name?></option>
								<?php
							}
							?>


							</select>
							<div class="clearfix"></div>
						</div>
						<label>Category Type Name</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<div class="clearfix"></div>
						</div>
						
						
						
						
						
						
						<label>Upload Category Type Image</label>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
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
							<h3 class="bars" align="center" style="color: black"><b>Manage Category Type</b></h3>
						</div>
<div class="bs-docs-example">
							<table class="table table-striped">
								<thead>
									
									 <tr>
            							<th >Sl.No</th>
            							<th>Category Name</th>
            							<th>Category Type</th>
            							<th>Image</th>
            							
            							<th >Edit</th>
            							<th >Delete</th>
        							</tr>
								</thead>
								
								<tbody>
									<?php
									$i=1;

                                        foreach ($fetch as $row2) 
                                        {
                                          	
                                          

									?>	
          <tr data-expanded="true">
          	
            <td><?php echo $i?></td>
            <td><?php echo $row2->category_name?></td>
            <td><?php echo $row2->category_type_name?></td>
             <td><img style="height: 130px; width: 150px" src="<?php echo base_url('Asset/nursery/category_type/'.$row2->c_type_image)?>">
             	</td>
              <td><a href="<?php echo base_url('index.php/Nurserycontroller/update_category_type/'.$row2->category_type_id)?>"><img style="height: 90px; width: 90px" src="<?php echo base_url('Asset/nursery/images/edit.jpg')?>"></a></td>
               <td><a href="<?php echo base_url('index.php/Nurserycontroller/delete_category_type/'.$row2->category_type_id )?>"><img style="height: 40px; width: 40px" src="<?php echo base_url('Asset/nursery/images/delete.png')?>"></a></td>

               
             
           
        </tr>
         <?php
        $i++;
    }
    ?>
        
         
       
       
									
								</tbody>
							</table>
						</div><br><br>


<?php

   $this->load->view('Nursery/layout/footer');

?>