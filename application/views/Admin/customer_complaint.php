<?php

   $this->load->view('Admin/layout/header');

?>







 
 <div style="overflow-x:auto;">
 <!--  <div class="table-agile-info">
 <div class="panel panel-default"> -->
     <div class="panel-heading"  >
     Customer Complaint
    </div>
    <div>

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
            <th>Nursery Name</th>
      <th>Customer Name</th>
      <th>Product Name</th>
      <th>Price</th> 
      <th>Quantity</th>
      <th>Paid Amount</th>
      <th>Uploadede Image (damage)</th>
      <th>Complaint Description</th>
      <th>Nursery Response</th>
          </tr>
        </thead>
        <tbody>
    <?php
      foreach ($complaint as $cpmlnt) {
      
      ?>
    <tr>
     
     
      <td><?php echo $cpmlnt->name?></td>
    
     <td><?php echo $cpmlnt->customer_name?></td> 
      <td><?php echo $cpmlnt->ps_name?></td>
      <td>₹<?php echo $cpmlnt->ps_price?></td>
       <td><?php echo $cpmlnt->quantity?></td>
       <td>₹<?php echo $cpmlnt->total?></td>
       <td><img src="<?php echo base_url('Asset/user/complaint/'.$cpmlnt->complaint_upload  )?>" style="height: 180px;width: 250px"></td>
    
      <td><?php echo $cpmlnt->Complaint?></td>
      <td><?php echo $cpmlnt->complaint_response?></td>

   
     
    </tr>
    <?php
  }
  ?>
  
         
        </tbody>
      </table>
    </div>
  </div>












<?php

   $this->load->view('Admin/layout/footer');

?>
