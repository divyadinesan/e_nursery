<?php
  $this->load->view('Nursery/layout/header');
?>


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
<body>
<br><br><br><br><br>
<h2 align="center">Review</h2>

<div style="overflow-x:auto;">
	<br><br><br><br><br>
  <table>
    <tr>
    
      <th>Customer Name</th>
      
      <th>Product Name</th>
      
      <th>Review</th>
      <th>Rating</th>
      
    </tr>
    <tr>
    	<?php
    	foreach ($review as $rvew) {
    	
    	?>
     
      <td><?php echo $rvew->name?></td>
       <td><?php echo $rvew->ps_name?></td>
       
      
      <td><?php echo $rvew->review?></td>
      <td><?php echo $rvew->rating?></td>
   
     
    </tr>
    <?php
}
?>
   
  </table>
  <br><br><br><br><br><br><br><br>
</div>

</body>
</html>













<?php
  $this->load->view('Nursery/layout/footer');
?>