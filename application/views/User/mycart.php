

<?php
$this->load->view('User/layout/user_header');
?><br><br><br><br><br><br>





<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2 align="center">My Orders</h2><br>
<br>
<?php
   
    foreach ($nursery as $cartnursery) {
    
    
    ?>
    <h2 align="center"><?php echo $cartnursery->name?></h2><br>
<br>
<table>
	<thead>
  <tr>
    <th>Name</th>
    <th>Image</th>
    <th>quantity</th>
     <th>price</th>
     <th>Sub Total</th>
     <th>Remove</th>

  </tr>
  </thead>
  <tbody>
  	<?php

  	
  	foreach ($mycart as $cart) {
      if($cart->nurseryemail==$cartnursery->email)
      {
  		
  	
  	?>
    
 
 
  <tr>
    <td><?php echo $cart->ps_name?></td>
    <td><img src="<?php echo base_url('Asset/nursery/plantseed/'.$cart->ps_image) ?>" style="height:100px;width: 100px"></td>
    <td><?php echo $cart->quantity?></td>
    <td>₹<?php echo $cart->price?></td>
    <td>₹<?php echo $cart->subtotal?></td>
    <td><a href="<?php echo base_url('index.php/Usercontroller/cart_remove/'.$cart->productid)?>"><img src="<?php echo base_url('Asset/nursery/images/remove.png')?>" style="height: 30px;width: 30px"></a></td>
  </tr>
 
  <?php
}
}
?>
  </tbody>
</table><br><br>
<?php
}
?>

</body>
<br>
<a href="<?php echo base_url('index.php/Usercontroller/checkout')?>"><img src="<?php echo base_url('Asset/admin/images/checkout.jpg')?>" style="height:130px;width: 170px"></a>
</html>



<?php
$this->load->view('User/layout/user_footer');
?>
