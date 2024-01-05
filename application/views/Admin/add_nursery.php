<?php

   $this->load->view('Admin/layout/header');

?>

 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ADD NURSERY
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="<?php echo base_url('index.php/Admincontroller/add_nursery_insert')?>" role="form" method="post" enctype="multipart/form-data">
                                	<div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input name="name"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email"  type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Expertise Since</label>
                                    <input  name="experience" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required min="0">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Location</label>
                                    <!-- <input  name="location" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required> -->
                                    <select name="location" class="form-control" id="exampleInputEmail1">
                                        <option value="Thrissur">Thrissur</option>
                                        <option value="Wayanad">Wayanad</option>
                                        <option value="Kasaragod">Kasaragod</option>
                                        <option value="Kollam">Kollam</option>
                                        <option value="Kottayam">Kottayam</option>
                                        <option value="Kozhikode">Kozhikode</option>
                                        <option value="Malappuram">Malappuram</option>
                                        <option value="Palakkad">Palakkad</option>
                                        <option value="Pathanamthitta">Pathanamthitta</option>
                                        <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                        <option value="Kannur">Kannur</option>
                                          <option value="Idukki">Idukki</option>
                                            <option value="Ernakulam">Ernakulam</option>
                                              <option value="Alappuzha">Alappuzha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input  name="address" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Delivery Boy Name</label>
                                    <input  name="delivery_boy_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Delivery Boy Email</label>
                                    <input  name="delivery_boy_email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Delivery Boy Password</label>
                                    <input  name="delivery_boy_password" type="password" class="form-control" id="exampleInputEmail1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required="">
                                </div>
                                <br>
                               <div class="form-group">
                                    <label for="exampleInputFile">Delivery Boy Driving Licence</label>
                                    <input  name="dboy_licence" type="file" id="exampleInputFile" required>
                                    
                                </div>
                                <br>
                                 <div class="form-group">
                                    <label for="exampleInputFile">Delivery Boy Aadhar</label>
                                    <input  name="aadhar" type="file" id="exampleInputFile" required>
                                    
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputFile">Nursery Image</label>
                                    <input  name="image" type="file" id="exampleInputFile" required>
                                    
                                </div>
                                <br>
                                  <div class="form-group">
                                    <label for="exampleInputFile">Nursery Licence (upload pdf file)</label>
                                    <input  name="licence" type="file" id="exampleInputFile" required>
                                    
                                </div>
                                <br>
                                <div class="checkbox">
                                    
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
           
        </div>

<?php

   $this->load->view('Admin/layout/footer');

?>