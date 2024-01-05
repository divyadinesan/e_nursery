<?php

  $this->load->view('Admin/layout/header');

?>

<div style="overflow-x:auto;">
 <!--  <div class="table-agile-info">
 <div class="panel panel-default"> -->
    <div class="panel-heading"  style="overflow-x:auto;">
     Admin Added Nursery
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
            <th>Name</th>
            <th>Email</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Expertise Since</th>
             <th data-breakpoints="xs">Location</th>
              <th data-breakpoints="xs">Address</th>
               <th data-breakpoints="xs">Nursery</th>
               <th data-breakpoints="xs">Nursery Status</th>
               <th data-breakpoints="xs">Deliveryboy Name</th>
               <th data-breakpoints="xs">Deliveryboy Email</th>
               <th data-breakpoints="xs">Deliveryboy Driving Licence</th>
               <th data-breakpoints="xs">Deliveryboy Aadhar Card</th>
          </tr>
        </thead>
        <tbody>

          <?php

                $i=1;
          
               foreach ($admin as $rows) 
               {
               
               
          
          ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
            <td><?php echo $rows->name?></td>
            <td><?php echo $rows->email?></td>
           
            
            <td><?php echo $rows->experience?></td>
             <td><?php echo $rows->location?></td>
              <td><?php echo $rows->address?></td>
               <td><img src="<?php echo base_url('Asset/nursery/license/'.$rows->liecence)?>" style="height: 80px;width: 80px"></td>
               <td><?php echo $rows->Nursery_status?></td>
                <td><?php echo $rows->delivery_boy_name?></td>
                 <td><?php echo $rows->delivery_boy_email?></td>
               <td><img src="<?php echo base_url('Asset/nursery/dboy_licence/'.$rows->dboy_licence)?>" style="height: 80px;width: 80px"></td>
               <td><img src="<?php echo base_url('Asset/nursery/aadhar/'.$rows->aadhar)?>" style="height: 80px;width: 80px"></td>
          </tr>
         
         
         
         
          <?php
          $i++;

      }
      ?>
        
         
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
</div>
</div>
</div>

</body>
</html>
<br><br><br>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
   


<div style="overflow-x:auto;">
 <!--  <div class="table-agile-info">
 <div class="panel panel-default"> -->
    <div class="panel-heading" style="overflow-x:auto;" >
     Registered Nursery
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
            <th>Name</th>
            <th>Email</th>
            <th data-breakpoints="xs">Password</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Experience</th>
             <th data-breakpoints="xs">Location</th>
              <th data-breakpoints="xs">Address</th>
               <th data-breakpoints="xs">Nursery</th>
               <th data-breakpoints="xs">Nursery Status</th>
               <th data-breakpoints="xs">Deliveryboy Name</th>
               <th data-breakpoints="xs">Deliveryboy Email</th>
               <th data-breakpoints="xs">Deliveryboy Driving Licence</th>
               <th data-breakpoints="xs">Deliveryboy Aadhar Card</th>
          </tr>
        </thead>
        <tbody>

          <?php

                $i=1;
          
               foreach ($nursery as $row) 
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
               <td><img src="<?php echo base_url('Asset/nursery/license/'.$row->liecence)?>" style="height: 80px;width: 80px"></td>
               <td><?php echo $row->Nursery_status?></td>
               <td><?php echo $rows->delivery_boy_name?></td>
                 <td><?php echo $rows->delivery_boy_email?></td>
               <td><img src="<?php echo base_url('Asset/nursery/dboy_licence/'.$rows->dboy_licence)?>" style="height: 80px;width: 80px"></td>
               <td><img src="<?php echo base_url('Asset/nursery/aadhar/'.$rows->aadhar)?>" style="height: 80px;width: 80px"></td>
          </tr>
         
         
         
         
          <?php
          $i++;

      }
      ?>
        
         
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
</div>
</div>
</div>

</body>
</html>
<br><br><br>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
   
<br><br>

		
<?php

   $this->load->view('Admin/layout/footer');

?>