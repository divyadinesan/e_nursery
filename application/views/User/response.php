
<?php
$this->load->view('User/layout/user_header');
?>
<br><br><br><br>
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
<body style="">
  <br><br><br><br>

<h2 align="center">Response</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Order Id</th>
       <th>Nursery Email</th>
      <th>Product Name</th>
      
      <th>Paid Amount</th>
      <th>Complaint Image</th>
      <th>Complaint Description</th>
      <th>Complaint Response</th>
      
      
    </tr>
    <?php
    foreach ($response as $rvew) {
     
     
    ?>
    <tr>
       <td><?php echo $rvew->order_id?></td>
        <td><?php echo $rvew->nursery_email?></td>
      <td><?php echo $rvew->ps_name?></td>
      <td>₹<?php echo $rvew->total?></td>
     <td><img src="<?php echo base_url('Asset/user/complaint/'.$rvew->complaint_upload)?>" style="height:200px;width: 200px"></td>
        <td><?php echo $rvew->Complaint?></td>
      <td><?php echo $rvew->complaint_response?></td>
     
     
      
     
    </tr>
   <?php

 }
 ?>
  </table>
</div>

</body>
</html>
<br><br><br><br><br><br><br><br>
<?php
$this->load->view('User/layout/user_footer');
?>
