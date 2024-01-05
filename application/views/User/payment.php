
<?php
$this->load->view('User/layout/user_header');
?><br><br><br><br>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Credit Card Payment</h3>
                            <hr>
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div>
                            <form class="form" role="form" autocomplete="off" method="post" action="<?php echo base_url('index.php/usercontroller/payinsrt')?>">
                               <?php
                                foreach ($mycart as $cartdetails)
                                ?> 
                           <input type="hidden" name="d_boy_email" value="<?php echo $cartdetails->d_boy_email ?>">
                             <input type="hidden" name="nurseryid" value="<?php echo $cartdetails->nurseryid?>">
                             <input type="hidden" name="nurserymail" value="<?php echo $cartdetails->nurseryemail?>">
                                <?php
                                foreach ($user as $usr) 
                                 
                                ?>
                            <input type="hidden" name="userid" value="<?php echo $usr->user_id?>">
                             <input type="hidden" name="usermail" value="<?php echo $usr->email?>">
                                <div class="form-group">
                                    <label for="cc_name">Card Holder's Name</label>
                                    <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required" placeholder="First and Last Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="" placeholder="16 digits" name="number">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Card Exp. Date</label>
                                   <div class="col-md-4">
                                        <input type="text" class="form-control"  required="" placeholder="mm/yy" name="expdate">
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC " name="cvv">
                                    </div>
                                </div>


  


                                <?php
                                
  	
    $total=0;
  	foreach ($mycart as $cart) {
        
  		
      $total=$total+$cart->subtotal;
  
  
}
  	
  	?>
                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">₹</span></div>
                                        <input type="text" class="form-control text-right" id="exampleInputAmount" value="<?php echo $total?>" name="Amount">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                    </div>
                                </div>
                                 <?php
                                
    
   
    foreach ($mycart as $cartinsrt) {
        ?>
        
        
      <input type="hidden" name="cartid[]" value="<?php echo $cartinsrt->cart_id ?>">
          <input type="hidden" name="productid[]"  value="<?php echo $cartinsrt->productid?>">
              <input type="hidden" name="userid" value="<?php echo $cartinsrt->userid?>">
               <input type="hidden" name="useremail" value="<?php echo $cartinsrt->useremail?>">
               <input type="hidden" name="nurseryemail" value="<?php echo $cartinsrt->nurseryemail?>">
               <input type="hidden" name="nurseryid" value="<?php echo $cartinsrt->nurseryid?>">


<input type="hidden" name="price[]" value="<?php echo $cartinsrt->price?>">
<input type="hidden" name="quantity[]" value="<?php echo $cartinsrt->quantity?>">

<input type="hidden" name="subtotal[]" value="<?php echo $cartinsrt->subtotal?>">
               <input type="hidden" name="category_id[]" value="<?php echo $cartinsrt->category_id?>">
               
               <input type="hidden" name="d_boy_email" value="<?php echo $cartinsrt->d_boy_email?>">

  
<?php  
}
    
    ?>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        
                                        <button type="reset" class="btn btn-default btn-lg btn-block"><a href="<?php echo base_url('index.php/Usercontroller/checkout')?>">Cancel</a></button>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card cc payment -->
                

<footer class="text-center py-4">
        
            <!-- //social icons -->
            <!-- copyright -->
            <div class="w3l-copy text-center mt-5">
                
            </div>
            <!-- //copyright -->
        </div>
    </footer>
    <!-- //footer -->

    <!-- move top icon -->
    
    <!-- //move top icon -->

</body>

</html>