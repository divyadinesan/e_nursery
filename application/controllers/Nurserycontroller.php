<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nurserycontroller extends CI_Controller {

	public function register()
	{
		$this->load->view('Nursery/registered');
	}

	public function register_insert()
	{
	
		$name=$this->input->post('name');
		$experience=$this->input->post('experience');
		$location=$this->input->post('location');
		$address=$this->input->post('address');
		$password=$this->input->post('password');
        $email=$this->input->post('email');
        
        $delivery_boy_name=$this->input->post('delivery_boy_name');
        $delivery_boy_email=$this->input->post('delivery_boy_email');
        $delivery_boy_password=$this->input->post('delivery_boy_password');
        
        $this->load->model('Nurserymodel');
		$exe=$this->Nurserymodel->register_already_insert($email);
	if($exe==0)
	{
	$image3=$_FILES['dboy_licence']['name'];
	$time3 = Time();
	$images3 = explode('.',$image3);
	$photo3 =$time3.'.'.end($images3);
	$config3['upload_path']= './Asset/nursery/dboy_licence';
	$config3['allowed_types']= 'jpg|png|jpeg';
	$config3['file_name'] = $photo3;
	$this->load->library('upload', $config3);
	$this->upload->initialize($config3);

	if( $this->upload->do_upload('dboy_licence'))
	{
	$image4=$_FILES['aadhar']['name'];
	$time4 = Time();
	$images4 = explode('.',$image4);
	$photo4 =$time4.'.'.end($images4);
	$config4['upload_path']= './Asset/nursery/aadhar';
	$config4['allowed_types']= 'jpg|png|jpeg';
	$config4['file_name'] = $photo4;
	$this->load->library('upload', $config4);
	$this->upload->initialize($config4);

	if( $this->upload->do_upload('aadhar'))
	{
         $image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/nursery/license';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			{


				$image1=$_FILES['licence']['name'];
			 	$time1 = Time();
			 	$images1 = explode('.',$image1);
			 	$photo1 =$time1.'.'.end($images1);
			 	$config1['upload_path']= './Asset/nursery/license';
			 	$config1['allowed_types']= 'jpg|png|jpeg|pdf';
				$config1['file_name'] = $photo1;
				$this->load->library('upload', $config1);
				$this->upload->initialize($config1);

				if( $this->upload->do_upload('licence'))
				{

						$result=array('name'=>$name,'email'=>$email,'password'=>$password,'experience'=>$experience,'location'=>$location,'address'=>$address,'liecence'=>$photo,'Nursery_status'=>'Waiting For Admin Approval','Nursery_type'=>'Nursery','delivery_boy_name'=>$delivery_boy_name,'delivery_boy_email'=>$delivery_boy_email,'delivery_boy_password'=>$delivery_boy_password,'licence'=>$photo1,'dboy_licence'=>$photo3,'aadhar'=>$photo4);
						$this->load->model('Nurserymodel');
						$exe=$this->Nurserymodel->register_insert_model($result);
					
						if($exe==1)
						{
							echo "<script>alert('Waiting for Admin Approval!!!')</script>";
							$this->login();
						}
						else
						{
				
							echo "<script>alert('failed')</script>";
							$this->register();
						}
				}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->register();
			}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->register();
			}
	}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->register();
			}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->register();
			}
	}

	else
	{
		echo "<script>alert('E-Nursery Already Registered')</script>";
					$this->register();
	}

	}

	public function login()
	{
		$this->load->view('Nursery/login');
	}

	public function login_insert()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$result=array('email'=>$email,'password'=>$password,'Nursery_status'=>'Approve');
		$this->load->model('Nurserymodel');
		$count=$this->Nurserymodel->nurseryy_login_insert_model($email,$password);
		$checkEmailCount=$this->Nurserymodel->checkEmailCount($email);
		$checkPasswordCount=$this->Nurserymodel->checkPasswordCount($password);
		if(count($count)>0)
		{
			echo "<script>alert ('Welcome To E-Nursery')</script>";
			$this->session->set_userdata('email',$email);
			$this->nursery_home();
		} elseif (empty($checkEmailCount)) {
			echo "<script>alert ('Please Enter Correct Email id')</script>";
			$this->login();	
		} elseif (empty($checkPasswordCount)) {
			echo "<script>alert ('Please Enter Correct Password')</script>";
			$this->login();	
		}
		else
		{
			echo "<script>alert ('Please Enter Correct Email id / Password')</script>";
			$this->login();
		}
	}
	
	public function nursery_home()
	{
		if($this->session->has_userdata('email'))
		{


		$this->load->view('Nursery/nursery_home');
		}
		else
		{
			$this->login();
		}
	}

	

public function nursery_profile()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Nurserymodel');
		$result['fetch']=$this->Nurserymodel->nursery_id_model();
		$this->load->view('Nursery/nursery_profile',$result);
		}
		else
		{
			$this->login();
		}
	}



	public function nursery_update()
	{
		if($this->session->has_userdata('email'))
		{
			$name=$this->input->post('name');
		$experience=$this->input->post('experience');
		$location=$this->input->post('location');
		$address=$this->input->post('address');
		$password=$this->input->post('password');
        $email=$this->input->post('email');
        
	 $nursery_id=$this->input->post('nursery_id');
	$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/nursery/license/';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('name'=>$name,'email'=>$email,'password'=>$password,'experience'=>$experience,'location'=>$location,'address'=>$address,'liecence'=>$Add_photos);
				$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->nursery_update_model($result,$nursery_id);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_profile();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->nursery_profile();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->nursery_profile();
	}
	}
	else
	{
		$result=array('name'=>$name,'email'=>$email,'password'=>$password,'experience'=>$experience,'location'=>$location,'address'=>$address);
		$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->nursery_update_model($result,$nursery_id);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_profile();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->nursery_profile();
		}
	}	
		}
		else
		{
			$this->login();
		}
	}


	

	public function nursery_category()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Nurserymodel');
		$result['fetch']=$this->Nurserymodel->nursery_product_model();
		$this->load->view('Nursery/nursery_category',$result);
	    }
	    else
	    {
	    	$this->login();
	    }
	}
	public function category_insert()
	{ 
		if($this->session->has_userdata('email'))
		{

		$name=$this->input->post('name');
		$this->load->model('Nurserymodel');
		$count=$this->Nurserymodel->category_already_insert($name);
		if($count==0)
		{

		$image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/nursery/category';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			{
               $result=array('category_name'=>$name,'image'=>$photo);
               $this->load->model('Nurserymodel');
               $exe=$this->Nurserymodel->category_insert_model($result);
               if($exe==1)
               {
               	echo "<script>alert ('succesfully added')</script>";
               	$this->nursery_category();
               }
               else
               {
                 echo "<script>alert ('try again')</script>";
                 $this->nursery_category();
               }

               	

			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->nursery_category();
			}
		}
			else
			{
				echo "<script>alert ('Category Aldeady Added')</script>";
				$this->nursery_category();
			}
		}
		else
		{
			$this->login();
		}
		

	}
	public function category_delete($category_id)
	{
		$this->load->model('Nurserymodel');
		$result=$this->Nurserymodel->category_delete_model($category_id);
		if($result==1)
		{
			$this->nursery_category();
		}
		else
		{
			$this->nursery_category();
		}
	}
	public function category_edit($category_id)
	{
		$this->load->model('Nurserymodel');
		$result['fetch']=$this->Nurserymodel->category_fetch_model($category_id);
		$this->load->view('Nursery/edit_nursery_category',$result);
	}


	public function category_update()
	{
		if($this->session->has_userdata('email'))
		{
			$category_id=$this->input->post('category_id');
		$name=$this->input->post('name');
		
	$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/nursery/category/';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('category_name'=>$name,'image'=>$Add_photos);
				$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->category_update_model($result,$category_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_category();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->nursery_category();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->nursery_category();
	}
	}
	else
	{
		$result=array('category_name'=>$name);
		$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->category_update_model($result,$category_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_category();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->nursery_category();
		}
	}	
		}
		else
		{
			$this->login();
		}
	}


	public function nursery_category_type()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Nurserymodel');
			$result['category']=$this->Nurserymodel->nursery_product_model();
		$result['fetch']=$this->Nurserymodel->nursery_category_type_join_model();
		
		$this->load->view('Nursery/nursery_category_type',$result);
	    }
	    else
	    {
	    	$this->login();
	    }
	}
	

	
	public function category_type_insert()
	{
		if($this->session->has_userdata('email'))
		{
		$category_id=$this->input->post('category_id');
		$name=$this->input->post('name');
		$this->load->model('Nurserymodel');
		$count=$this->Nurserymodel->category_type_already_insert($name);
		if($count==0)
		{

		$image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/nursery/category_type';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			{
               $result=array('catgry_id'=>$category_id,'category_type_name'=>$name,'c_type_image'=>$photo);
               $this->load->model('Nurserymodel');
               $exe=$this->Nurserymodel->category_type_insert_model($result);
               if($exe==1)
               {
               	echo "<script>alert ('succesfully added')</script>";
               	$this->nursery_category_type();
               }
               else
               {
                 echo "<script>alert ('try again')</script>";
                 $this->nursery_category_type();
               }

               	

			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->nursery_category_type();
			}
		}
			else
			{
				echo "<script>alert ('Category Aldeady Added')</script>";
				$this->nursery_category_type();
			}
		}
		else
		{
			$this->login();
		}
		
	}
	public function delete_category_type($category_type_id)
	{
		$this->load->model('Nurserymodel');
		$result=$this->Nurserymodel->delete_category_type_model($category_type_id);
		if($result==1)
		{
			$this->nursery_category_type();
		}
		else
		{
			$this->nursery_category_type();
		}
	}

	public function edit_category_type()
	{
		if($this->session->has_userdata('email'))
		{
		$category_type_id=$this->input->post('category_type_id');
		$name=$this->input->post('name');
		
	$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/nursery/category_type/';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('category_type_name'=>$name,'c_type_image'=>$Add_photos);
				$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->edit_category_type_model($result,$category_type_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_category_type();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->nursery_category_type();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this-> nursery_category_type();
	}
	}
	else
	{
		$result=array('category_type_name'=>$name);
		$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->edit_category_type_model($result,$category_type_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_category_type();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->nursery_category_type();
		}
	}	
		}
		else
		{
			$this->login();
		}
	}

	public function plnt_seed_update()
	{
		if($this->session->has_userdata('email'))
		{
		 $ps_id=$this->input->post('ps_id');
		//$nursery_email=$this->input->post('nursery_email');
		//$ps_nursery_id=$this->input->post('nursery_id');	
		//$ps_catgry_type_id=$this->input->post('category_type_id');	
		$ps_name=$this->input->post('name');	
		$ps_price=$this->input->post('price');	
		$ps_description=$this->input->post('description');	
		$ps_care=$this->input->post('p_c');	
		$ps_watering=$this->input->post('Watering');	
		$ps_soil=$this->input->post('Soil');	
		$ps_temperature	=$this->input->post('Temperature');
		
	$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/nursery/plantseed/';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('ps_name'=>$ps_name,'ps_price'=>$ps_price,'ps_description'=>$ps_description,'ps_care'=>$ps_care,'ps_watering'=>$ps_watering,'ps_soil'=>$ps_soil,'ps_temperature'=>$ps_temperature,'ps_image'=>$Add_photos);
				$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->plnt_seed_update_model($result,$ps_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_plant();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->nursery_plant();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->nursery_plant();
	}
	}
	else
	{
		$result=array('ps_name'=>$ps_name,'ps_price'=>$ps_price,'ps_description'=>$ps_description,'ps_care'=>$ps_care,'ps_watering'=>$ps_watering,'ps_soil'=>$ps_soil,'ps_temperature'=>$ps_temperature);
		$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->plnt_seed_update_model($result,$ps_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_plant();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->nursery_category_type();
		}
	}	
		}
		else
		{
			$this->login();
		}
	}
	public function update_category_type($category_type_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Nurserymodel');
		$result['fetch']=$this->Nurserymodel->fetch_category_type_model($category_type_id);
		$this->load->view('Nursery/update_category_type',$result);
	    }
	    else
	    {
	    	$this->login();
	    }
	}

	

	public function nursery_plant()
	{
	    if($this->session->has_userdata('email'))
	    { 
		 
	    $this->load->model('Nurserymodel');
	    $result['psfetch']=$this->Nurserymodel->plantssed_fetch_model();
		$result['nursery_id']=$this->Nurserymodel->nursery_id_model();
		$result['c_type']=$this->Nurserymodel->nur_cat_type_model();

		$this->load->view('Nursery/nursery_plant',$result);
	    }
	    else
	    {
	    	$this->login();
	    }
	}

	public function delete_plantseed($ps_id )
	{
		$this->load->model('Nurserymodel');
		$result=$this->Nurserymodel->delete_plantseed_model($ps_id);
		if($result==1)
		{
			$this->nursery_plant();
		}
		else
		{
			$this->nursery_plant();
		}
	}

 	public function plnt_seed_insert()
	{
		$nursery_email=$this->input->post('nursery_email');
		$ps_nursery_id=$this->input->post('nursery_id');	
		$ps_catgry_type_id=$this->input->post('category_type_id');	
		$ps_name=$this->input->post('name');	
		$ps_price=$this->input->post('price');	
		$ps_description=$this->input->post('description');	
		$ps_care=$this->input->post('p_c');	
		$ps_watering=$this->input->post('Watering');	
		$ps_soil=$this->input->post('Soil');	
		$ps_temperature	=$this->input->post('Temperature');
			
	
        $this->load->model('Nurserymodel');
		$exe=$this->Nurserymodel->plnt_seedt_already_insert($ps_name);
	if($exe==0)
	{
         $image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/nursery/plantseed';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			{
				$result=array('ps_nursery_id'=>$ps_nursery_id,'ps_catgry_type_id'=>$ps_catgry_type_id,'ps_name'=>$ps_name,'ps_price'=>$ps_price,'ps_description'=>$ps_description,'ps_care'=>$ps_care,'ps_watering'=>$ps_watering,'ps_soil'=>$ps_soil,'ps_temperature'=>$ps_temperature,'ps_image'=>$photo,'nursery_email'=>$nursery_email,'uses'=>'NULL');
				$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->product_insert_model($result);
			
				if($exe==1)
				{
					echo "<script>alert(' Inserted')</script>";
					$this->nursery_plant();
				}
				else
				{
		
					echo "<script>alert('Failed To Insert')</script>";
					$this->nursery_plant();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->nursery_plant();
			}
	}
	else
	{
		echo "<script>alert(' Already Inserted')</script>";
					$this->nursery_plant();
	}

	}
	public function update_plantseed($ps_id)
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Nurserymodel');
		$result['plantseed']=$this->Nurserymodel->plantseeds_fetch_model($ps_id);
		$this->load->view('Nursery/update_plantseed',$result);
		}
		else
		{
			$this->login();
		}
	}


	public function nursery_fertilizer()
	{
		 if($this->session->has_userdata('email'))
	    { 
		$this->load->model('Nurserymodel');
		$result['soil']=$this->Nurserymodel->plantssed_fetch_model();
        $result['fetch']=$this->Nurserymodel->soil_fertilizer_nursery();
		$result['product']=$this->Nurserymodel->nursery_category_type_model();
		$this->load->view('Nursery/nursery_fertilizer',$result);
		}
		 else
	    {
	    	$this->login();
	    }
	}

public function soil_fertilizer_insert()
	{
		
		$category_type_id=$this->input->post('category_type_id');
		$sf_nursery_id=$this->input->post('sf_nursery_id');
 		$sf_nursery_email=$this->input->post('sf_nursery_email');
 		$name=$this->input->post('name');
 		$price=$this->input->post('price');
 		$discription=$this->input->post('discription');
 		$care=$this->input->post('care');
 		$use=$this->input->post('use');
			
	
        $this->load->model('Nurserymodel');
		$exe=$this->Nurserymodel->soil_fertilizer_already_insert($name);
	if($exe==0)
	{
         $image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/nursery/plantseed';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			{
				$insert=array('ps_nursery_id'=>$sf_nursery_id,'ps_catgry_type_id'=>$category_type_id,'ps_name'=>$name,'ps_price'=>$price,'ps_description'=>$discription,'ps_care'=>$care,'ps_watering'=>'NULL','ps_soil'=>'NULL','ps_temperature'=>'NULL','ps_image'=>$photo,'nursery_email'=>$sf_nursery_email,'uses'=>$use);
				$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->soil_fertilizer_insert_model($insert);
			
				if($exe==1)
				{
					echo "<script>alert(' Inserted')</script>";
					$this->nursery_fertilizer();
				}
				else
				{
		
					echo "<script>alert('Failed To Insert')</script>";
					$this->nursery_fertilizer();
				}
			}
			else
			{
				    echo "<script>alert('Invalid Image')</script>";
					$this->nursery_fertilizer();
			}
	        }
	        else
	        {
		            echo "<script>alert(' Already Inserted')</script>";
					$this->nursery_fertilizer();
	        }

	}


	public function soil_fertilizer_updated()
	{
		$product_id=$this->input->post('product_id');
		// $category_type_id=$this->input->post('category_type_id');
		// $sf_nursery_id=$this->input->post('sf_nursery_id');
 	// 	$sf_nursery_email=$this->input->post('sf_nursery_email');
 		$name=$this->input->post('name');
 		$price=$this->input->post('price');
 		$discription=$this->input->post('discription');
 		$care=$this->input->post('care');
 		$use=$this->input->post('use');
 		$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/nursery/plantseed/';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('ps_name'=>$name,'ps_price'=>$price,'ps_description'=>$discription,'ps_care'=>$care,'ps_image'=>$Add_photos,'uses'=>$use);
		$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->soil_fertilizer_updated_model($result,$product_id);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_fertilizer();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->nursery_fertilizer();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this-> nursery_fertilizer();
	}
	}
	else
	{
		$result=array('ps_name'=>$name,'ps_price'=>$price,'ps_description'=>$discription,'ps_care'=>$care,'uses'=>$use);
		$this->load->model('Nurserymodel');
				$exe=$this->Nurserymodel->soil_fertilizer_updated_model($result,$product_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->nursery_fertilizer();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->nursery_fertilizer();
		}
	}	
	}
	public function delete_soilfertliser($ps_id)
	{
		$this->load->model('Nurserymodel');
		$result=$this->Nurserymodel->delete_soilfertliser_model($ps_id);
		if($result==1)
		{
			$this->nursery_fertilizer();
		}
		else
		{
			$this->nursery_fertilizer();
		}
	}

	public function nursery_fertilizer_edit($ps_id)
	{
		$this->load->model('Nurserymodel');
		$result['soilfertilizer']=$this->Nurserymodel->nursery_fertilizer_fetch_model($ps_id);
		$this->load->view('Nursery/nusery_fertilizer_edit',$result);
	}

	public function user_payment_details()
	{
		if($this->session->has_userdata('email'))
	    { 
	    $this->load->model('Nurserymodel');
		$result['usr_pay']=$this->Nurserymodel->user_payment_details_model();
		$this->load->view('Nursery/user_payment_details',$result);
		}
		 else
	    {
	    	$this->login();
	    }
		
	}

	 public function review()
	{
		if($this->session->has_userdata('email'))
		{

		$this->load->model('Nurserymodel');
		$result['review']=$this->Nurserymodel->review_fetch_model();
		$this->load->view('Nursery/review',$result);
		}
		else
		{
			$this->login();
		}
	}

public function logout()
	{
		$this->session->sess_destroy();
		$this->load->model('Nurserymodel');
		$result['category']=$this->Nurserymodel->nursery_product_model();
			$result['nursery']=$this->Nurserymodel->nursery_nurery_model();
		$this->load->view('index/index',$result);
	}

	public function user_Complaints()
	{
		if($this->session->has_userdata('email'))
		{

		$this->load->model('Nurserymodel');
		$result['complaint']=$this->Nurserymodel->complaint_fetch_model();
		
		$this->load->view('Nursery/user_Complaints',$result);
		}
		else
		{
			$this->login();
		}
	}

	public function response($complaint_id )
	{
		$response=$this->input->post('Response');
		$ArrData=array('complaint_response'=>$response);
		$this->load->model('Nurserymodel');
		$result=$this->Nurserymodel->response_model($complaint_id,$ArrData);
		if($result==1)
		{
			$this->user_Complaints();
		}
		else
		{
			$this->user_Complaints();
		}
	}















}