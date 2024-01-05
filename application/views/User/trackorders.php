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
<br><br>
<h2 align="center">Track Order</h2><br><br>
<br>

    
<table>
	<thead>
    <!--  <tr><h4 align="center"><?php echo $cartnursery->name?></h4></tr><br> -->
  <tr>
    <th>Order Id</th>
    <th>Nursery Name</th>
    <th>Delivery BOY</th>
    <th>Amount</th>
    <th>Payment Status</th>
    <th>Order Status</th>
   
    <th>Review</th>
   
    

     

  </tr>
  </thead>
  <tbody>
  	<?php
  	
    
  	foreach ($order as $trk) {
     
      
  		
     
  	
  	?>

  <tr>
    <td><?php echo $trk->order_id?></td>
    <td><?php echo $trk->name?></td>
     <td><?php echo $trk->delivery_boy_name?></td>
    <td>₹<?php echo $trk->amount?></td>
     <td><?php echo $trk->paymentstatus?></td>
    <td><?php echo $trk->order_sts?></td>
    <?php
     if($trk->order_sts=='Delivered')
      {
        ?>
    <td><a href="<?php echo base_url('index.php/Usercontroller/review/'.$trk->orderid)?>"><button style="border-radius: 9px">Review</button></a></td>
    <?php
  }
  else
    {
      ?>
       <td>Waiting for Delivery</td>
<?php
    }?>
   
    

    
  </tr>
  <?php
  }
   ?>
 
     
     
  
  </tbody>
</table><br><br><br>

</body>
<br><br>

</html>
<br>


<?php
$this->load->view('User/layout/user_footer');
?>
