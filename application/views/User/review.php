
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

<h2 align="center">Review</h2>
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
      <th>Rating</th>
      <th>Review</th>
      
      
    </tr>
    <?php
    foreach ($review_ftch as $rvew) {
     
    ?>
    <tr>
       <td><?php echo $rvew->order_id?></td>
        <td><?php echo $rvew->nursery_email?></td>
      <td><?php echo $rvew->ps_name?></td>
      <td>₹<?php echo $rvew->ps_price?></td>
     
     
      <td><?php echo $rvew->quantity?></td>
      
      <td>₹<?php echo $rvew->subtotal?></td>
       <form method="post" action="<?php echo base_url('index.php/Usercontroller/reviewinsert')?>">
        <td>
           <select name="rating" style="background-color: black;height: 50px;width:150px">
                           <option value="☆☆☆☆☆">🌟🌟🌟🌟🌟</option>
                           <option value="☆☆☆☆">🌟🌟🌟🌟✩</option>
                           <option value="☆☆☆">🌟🌟🌟✩✩</option>
                           <option value="☆☆">🌟🌟✩✩✩</option>
                           <option value="☆">🌟✰✩✩✩</option>

                           
                           
                        </select></td>
                        <input type="hidden" name="user_id" value="<?php echo $rvew->userid?>">
                        <input type="hidden" name="product_id" value="<?php echo $rvew->productid?>">
                         <input type="hidden" name="nursery_id" value="<?php echo $rvew->nurseryid?>">
                        <input type="hidden" name="order_id" value="<?php echo $rvew->orderid?>">

                        <input type="hidden" name="user_email" value="<?php echo $rvew->useremail?>">
                        <input type="hidden" name="nursery_email" value="<?php echo $rvew->nurseryemail?>">
                        
                        <td>
                          <input type="text" name="review" ><br><br>
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
