<?php

  $this->load->view('Nursery/layout/header');

?>


<br><br><br><br><br><br>
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

<h2 align="center">Payment Details</h2><br><br>
<br>

    
<table>
	<thead>
    <!--  <tr><h4 align="center"><?php echo $cartnursery->name?></h4></tr><br> -->
  <tr>
     <th>Sl.No</th>
  
    <th>Nursery Name</th>
    <th>User Name</th>
      <th>Order Id</th>
    <th>Amount</th>
    <th>Payment Status</th>
    <th>Order Status</th>
    

     

  </tr>
  </thead>
  <tbody>
  	
<?php
$i=1;
foreach ($usr_pay as $userpay) {
 
?>
  <tr>
    <td><?php echo $i?></td>
   
    <td><?php echo $userpay->name?></td>
     <td><?php echo $userpay->c_name?></td>
     <td><?php echo $userpay->order_id?></td>
    <td>₹<?php echo $userpay->amount?></td>
    
    <td><?php echo $userpay->paymentstatus?></td>
    <td><?php echo $userpay->order_sts?></td>
   
    

    
  </tr>
 
<?php
$i++;
}
?>
 
 
     
     
  
  </tbody>
</table><br><br><br>

</body>
<br><br>

</html>
<br>





<?php

  $this->load->view('Nursery/layout/footer');

?>