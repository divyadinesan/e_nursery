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
 <a href="<?php echo base_url('index.php/indexcontroller/index')?>"> <img src="<?php echo base_url('Asset/Admin/images/logout.png')?>" align="right" style="height: 50px;width: 50px;padding-right: 15px;"></a>
<br><br><br>
<h1 align="center">Manager Order</h1><br><br>

<table>
  <tr>
    <th>Sl.No</th>
    <th>Customer Name</th>
    <th>Email</th>
    <th>Address</th>
     <th>Order Id</th>
     <th>Amount</th>
      <th>Payment Status</th>
      <th>Current Order Status</th>
      <th>Order Status</th>
  </tr>
  <?php
  $i=1;
  foreach ($order as $ordr) {
    if($ordr->order_sts=='ON HOLD' or $ordr->order_sts=='order dispatched')
     {
   
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $ordr->name?></td>
    <td><?php echo $ordr->user_email?></td>
    <td><?php echo $ordr->address?></td>
    <td><?php echo $ordr->order_id?></td>
    <td><?php echo $ordr->amount?></td>
    <td><?php echo $ordr->paymentstatus?></td>
    <td><?php echo $ordr->order_sts?></td>
    <td><form method="post" action="<?php echo base_url('index.php/indexcontroller/order_updation/'.$ordr->orderid.'/'.$ordr->order_id)?>">
      <select name="Status">
        <option value="order dispatched">Dispatched</option>
        <option value="Delivered">Delivered</option>
      </select>
      <input type="submit" name="">
    </form></td>
    
  </tr>
 <?php
 $i++;
}
}
?>
</table>

</body>
</html>

