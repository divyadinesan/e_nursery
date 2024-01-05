
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

<h2 align="center">Register Your Complaint</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Order Id</th>
       <th>Nursery Email</th>
      <th>Product Name</th>
      <th>Price</th> 
      <th>Quantity</th>
      <th>Paid Amount</th>
      <th>Upload Image</th>
      <th>Complaint Description</th>
      
      
    </tr>
    <?php
    foreach ($details as $rvew) {
     
     
    ?>
    <tr>
       <td><?php echo $rvew->order_id?></td>
        <td><?php echo $rvew->nursery_email?></td>
      <td><?php echo $rvew->ps_name?></td>
      <td>₹<?php echo $rvew->ps_price?></td>
     
     
      <td><?php echo $rvew->quantity?></td>
      
      <td>₹<?php echo $rvew->subtotal?></td>
       <form method="post" action="<?php echo base_url('index.php/Usercontroller/complaintinsert')?>" enctype=multipart/form-data>
        <td><input type="file" name="cmplnt"></td>
                        <input type="hidden" name="user_id" value="<?php echo $rvew->userid?>">
                        <input type="hidden" name="product_id" value="<?php echo $rvew->productid?>">
                         <input type="hidden" name="nursery_id" value="<?php echo $rvew->nurseryid?>">
                        <input type="hidden" name="order_id" value="<?php echo $rvew->orderid?>">

                        <input type="hidden" name="user_email" value="<?php echo $rvew->useremail?>">
                        <input type="hidden" name="nursery_email" value="<?php echo $rvew->nurseryemail?>">
                         <input type="hidden" name="quantity" value="<?php echo $rvew->quantity?>">
                          <input type="hidden" name="total" value="<?php echo $rvew->subtotal?>">
                        <td>
                          <input type="text" name="complaint" ><br><br>
                          <input type="submit" name="">
                        </td>
       </form>
      
     
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
