<?php
$this->load->view('Admin/layout/header');
?>





    <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
   Payment Details
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
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">Sl.No</th>
            <th>Card Holder Name</th>
            <th>Card Number</th>
            <th data-breakpoints="xs">Card Expiry Date</th>    
              <th>Payment Date</th>
               
                <th>Nursery</th>
                 <th>Amount</th>
                  <th>Order ID</th>
             
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach ($payment as $pymnt)
           {
            
          ?>
          
          <tr data-expanded="true">
           <td><?php echo $i?></td>
           <td><?php echo $pymnt->c_name?></td>
           <td><?php echo $pymnt->c_number?></td>
           <td><?php echo $pymnt->exp_date?></td>
           <td><?php echo $pymnt->pay_date?></td>
           <td><?php echo $pymnt->name?></td>
            <td>₹<?php echo $pymnt->amount?></td>
           <td><?php echo $pymnt->orderid?></td>
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
<script>
function Check(me) {
    me.value = me.value.replace(/[0-9]/g, "");
}
</script>




<?php
$this->load->view('Admin/layout/footer');
?>