<?php
$this->load->view('Admin/layout/header');
?>

<div style="overflow-x:auto;">
 <!--  <div class="table-agile-info">
 <div class="panel panel-default"> -->
    <div class="panel-heading">
    Order Tracking
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
              <th>Sl.No</th>
                <th>Customer name</th>
                <th>Customer Email</th>
                <th>Address</th>
                <th>Nursery Email</th>
                <th>Order Id</th>
                <th>Delivery Boy Email</th>
                <th>Amount</th>
                
                <th>Order Status</th>
               
            </tr>
        </thead>
        <tbody>

        <?php
          $i=1;
          foreach ($track_order as $trk_ordr) {
            
          ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $trk_ordr->name?></td>
            
                <td><?php echo $trk_ordr->email?></td>
                <td><?php echo $trk_ordr->address?></td>
                <td><?php echo $trk_ordr->nsry_email?></td>
                 <td><?php echo $trk_ordr->order_id?></td>
                <td><?php echo $trk_ordr->delivery_boy_email  ?></td>
                <td>₹<?php echo $trk_ordr->amount?></td>
               
                <td><?php echo $trk_ordr->order_sts?></td>
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