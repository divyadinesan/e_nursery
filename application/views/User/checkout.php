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

<h2 align="center">Checkout</h2><br><br>
<br>
<?php
   
    foreach ($nursery as $cartnursery) {
    
    
    ?>
    
<table>
	<thead>
     <tr><h4 align="center"><?php echo $cartnursery->name?></h4></tr><br>
  <tr>
    <th>Name</th>
    <th>Image</th>
    <th>quantity</th>
     <th>price</th>
     <th>Sub Total</th>

     

  </tr>
  </thead>
  <tbody>
  	<?php
  	
    $total=0;
  	foreach ($mycart as $cart) {
      if($cart->nurseryemail==$cartnursery->email)
      {
  		
      $total=$total+$cart->subtotal;
  	
  	?>

  <tr>
    <td><?php echo $cart->ps_name?></td>
    
    <td><img src="<?php echo base_url('Asset/nursery/plantseed/'.$cart->ps_image) ?>" style="height:100px;width: 100px"></td>
   
    <td><?php echo $cart->quantity?></td>
    <td>₹<?php echo $cart->price?></td>
    <td>₹<?php echo $cart->subtotal?></td>

    
  </tr>
 

  <?php
}
}
?>
 
     <td><h4 align="center">Total Amount : ₹<?php echo $total?></h4></td>
     <td colspan="4">

      <form method="post" action="<?php echo base_url('index.php/Usercontroller/payment')?>">
      <input type="hidden" name="nursery_id" value="<?php echo $cartnursery->nurseryid?>">
       <button type="submit" class="btn btn-block" data-blast="bgColor">Pay Now</button>
     </form>
     
   </td>
     
  
  </tbody>
</table><br><br><br>
<?php
}
?>
</body>
<br><br>

</html>
<br>
<section id="why" >
    <div class="container py-xl-7 py-lg-3">
      
      <div class="row contact-form">
        <div class="offset-lg-2"></div>
        <div class="col-lg-8 wthree-form-left" style="background-color: grey">
          <!-- contact form grid -->
          <fieldset class="contact-top1" data-blast="borderColor">
            <legend class="text-wh let text-capitalize" >Delivery Address</legend>
            
              <?php
              foreach ($user as $usr)
                
              ?>
              <div class="form-group">
                <label for="contactemail">Name</label>
                <input type="text" class="form-control" name="name" id="contactemail" value="<?php echo $usr->name?>">
              </div>
              <div class="form-group">
                <label for="contactemail">Email</label>
                <input type="text" class="form-control" name="name" id="contactemail" value="<?php echo $usr->email?>">
              </div>
              <div class="form-group">
                <label for="contactemail">Phone</label>
                <input type="text" class="form-control" name="name" id="contactemail" value="<?php echo $usr->phone?>">
              </div>
              <div class="form-group">
                <label for="contactemail">Address</label>
                <input type="text" class="form-control" name="name" id="contactemail" value="<?php echo $usr->address?>">
              </div>
           
             
          </fieldset>
          <!--  //contact form grid ends here -->
        </div>
        <div class="offset-lg-2"></div>
      </div>
      <!-- contact address -->
      
      <!-- //contact address -->
    </div>
  </section>

<?php
$this->load->view('User/layout/user_footer');
?>
