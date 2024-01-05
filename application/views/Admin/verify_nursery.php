<?php

   $this->load->view('Admin/layout/header');

?>

<div style="overflow-x:auto;">
 <!--  <div class="table-agile-info">
 <div class="panel panel-default"> -->
     <div class="panel-heading" style="overflow-x:auto;" >
     Veriefy Nursery
    </div>
    <div style="overflow-x:auto;">

      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}' style="background-color:white;color: black">
        <thead>
         <tr>
            <th data-breakpoints="xs">ID</th>
            <th> Name</th>
            <th>Email</th>
            <th data-breakpoints="xs">Password</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Expertise Since</th>
             <th>Location</th>
              <th>Address</th>
               <th>Image</th>
                <th>Licence</th>
               <th data-breakpoints="xs">Nursery Status</th>
               <th data-breakpoints="xs">Deliveryboy Name</th>
               <th data-breakpoints="xs">Deliveryboy Email</th>
               <th data-breakpoints="xs">Deliveryboy Driving Licence</th>
               <th data-breakpoints="xs">Deliveryboy Aadhar Card</th>
               <th data-breakpoints="xs">Approved</th>
               <th data-breakpoints="xs">Rejection</th>
          </tr>
        </thead>
        <tbody>
  <?php

                $i=1;
          
               foreach ($verify as $row) 
               {
               
               
          
          ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
            <td><?php echo $row->name?></td>
            <td><?php echo $row->email?></td>
            <td><?php echo $row->password?></td>
            
            <td><?php echo $row->experience?></td>
             <td><?php echo $row->location?></td>
              <td><?php echo $row->address?></td>
               <td><img src="<?php echo base_url('Asset/nursery/license/'.$row->liecence)?>" style="height: 100px;width: 100px"></td>
               <td><br><object data="<?php echo base_url('Asset/nursery/license/'.$row->licence)?>"  width="300px" height="300px" type="application/pdf"></object><br><br><br></td>
               <td><?php echo $row->Nursery_status?></td>

                <td><?php echo $row->delivery_boy_name?></td>
                 <td><?php echo $row->delivery_boy_email?></td>
               <td><img src="<?php echo base_url('Asset/nursery/dboy_licence/'.$row->dboy_licence)?>" style="height: 80px;width: 80px"></td>
               <td><img src="<?php echo base_url('Asset/nursery/aadhar/'.$row->aadhar)?>" style="height: 80px;width: 80px"></td>
               <td><a href="<?php echo base_url('index.php/Admincontroller/approve_nursery/'.$row->id)?>"><img src="<?php echo base_url('Asset/admin/images/approve.jpg')?>" style="height: 60px; width: 60px"></a></td>
               <td> <a href="<?php echo base_url('index.php/Admincontroller/rejection_nursery/'.$row->id)?>"><img src="<?php echo base_url('Asset/admin/images/rejected.png')?>" style="height: 50px; width: 50px"></a></td>
          </tr>

          <?php
          $i++;

      }
      ?>
         
         
        </tbody>
      </table>
    </div>
  </div>















<?php

   $this->load->view('Admin/layout/footer');

?>