<?php
$this->load->view('Admin/layout/header');
?>





		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
   User Details
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
            <th data-breakpoints="xs">ID</th>
            <th> Name</th>
            <th>Email</th>
            <th data-breakpoints="xs">Phone Number</th>    
              <th>Address</th>
             
          </tr>
        </thead>
        <tbody>
        	<?php
        	$i=1;
        	foreach ($user as $usr)
        	 {
        		
        	?>
        	
          <tr data-expanded="true">
           <td><?php echo $i?></td>
           <td><?php echo $usr->name?></td>
           <td><?php echo $usr->email?></td>
           <td><?php echo $usr->phone?></td>
           <td><?php echo $usr->address?></td>
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