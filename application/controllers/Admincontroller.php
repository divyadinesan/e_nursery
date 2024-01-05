<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {

	public function admin_login()
	{
		$this->load->view('Admin/admin_login');
	} 

	public function admin_login_insert()
	{
		
		$email=$this->input->post('Email');
		$password=$this->input->post('Password');
		$result=array('email'=>$email,'password'=>$password);
		$this->load->model('Adminmodel');
		$count=$this->Adminmodel->admin_login_insert_model($email,$password);
		$checkEmailCount=$this->Adminmodel->checkEmailCount($email);
		$checkPasswordCount=$this->Adminmodel->checkPasswordCount($password);
		// echo '<pre>';
		// print_r($checkEmailCount);die();
		if(count($count)>0)
		{
			echo "<script>alert ('Welcome')</script>";
			$this->session->set_userdata('email',$email);
			$this->Change_password();
		} elseif (empty($checkEmailCount)) {
			echo "<script>alert ('Please Enter Correct Email id')</script>";
			$this->admin_login();	
		} elseif (empty($checkPasswordCount)) {
			echo "<script>alert ('Please Enter Correct Password')</script>";
			$this->admin_login();	
		}
		else
		{
			echo "<script>alert ('Please Enter Correct Email id / Password')</script>";
			$this->admin_login();
		}
	}

	public function admin_home()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->view('Admin/admin_home');
		}
		else
		{
			$this->admin_login();
		}
	}

	public function view_nursery()
	{
		if($this->session->has_userdata('email'))
		{
	    $this->load->model('Adminmodel');
	    $exe['nursery']=$this->Adminmodel-> view_nusry_nursery_model();
	     $exe['admin']=$this->Adminmodel->view_admin_nursery_model(); 
		$this->load->view('Admin/view_nursery',$exe);
		}
		else
		{
			$this->admin_login();
		}
		
	}

	public function customer_complaint()
	{
if($this->session->has_userdata('email'))
		{
	   $this->load->model('Nurserymodel');
		$result['complaint']=$this->Nurserymodel->customer_complaint_fetch_model();
// echo '<pre>';
// 		print_r($result);die();
		$this->load->view('Admin/customer_complaint',$result);
		}
		else
		{
			$this->admin_login();
		}
	}

	public function add_nursery()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->view('Admin/add_nursery');
		}
		else
		{
			$this->admin_login();
		}
	}

	public function add_nursery_insert()
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

						$result=array('name'=>$name,'email'=>$email,'password'=>$password,'experience'=>$experience,'location'=>$location,'address'=>$address,'liecence'=>$photo,'Nursery_status'=>'Approve','Nursery_type'=>'Admin','delivery_boy_name'=>$delivery_boy_name,'delivery_boy_email'=>$delivery_boy_email,'delivery_boy_password'=>$delivery_boy_password,'licence'=>$photo1,'dboy_licence'=>$photo3,'aadhar'=>$photo4);
						$this->load->model('Nurserymodel');
						$exe=$this->Nurserymodel->register_insert_model($result);
					
						if($exe==1)
						{
							echo "<script>alert('E-Nursery Registered')</script>";
	 						$this->add_nursery();
						}
						else
						{
				
							echo "<script>alert('failed')</script>";
							$this->add_nursery();
						}
				}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->add_nursery();
			}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->add_nursery();
			}
	}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->add_nursery();
			}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->add_nursery();
			}
	}

	else
	{
		echo "<script>alert('E-Nursery Already Registered')</script>";
					$this->add_nursery();
	}

	}

	public function verify_nursery()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Adminmodel');
		$result['verify']=$this->Adminmodel->nursery_verify_model();
		$this->load->view('Admin/verify_nursery',$result);
		}
		else
		{
			$this->admin_login();
		}
	}

	public function approve_nursery($id)
	{
		$approve=array('Nursery_Status'=>'Approve');

       $this->load->model('Adminmodel');
       $exe=$this->Adminmodel->approve_nursery_model($id,$approve);
       if($exe==1)
       {
       	echo "<script>alert ('Updation Succesfully ')</script>";
       	$this->verify_nursery();
       }
       else
       {
       	echo "<script>alert ('Failed To Update')</script>";
       	$this->verify_nursery();
       }
	}

	public function rejection_nursery($id)
	{
		$rejection=array('Nursery_Status'=>'Rejected');
		$this->load->model('Adminmodel');
		$exe=$this->Adminmodel->rejection_nursery_model($id,$rejection);
		if($exe==1)
		{
			echo "<script>alert ('Rejected')</script>";
			$this->verify_nursery();
		}
		else
		{
			echo "<script>alert ('Failed To Reject')</script>";
			$this->verify_nursery();
		}
	}
	public function delivery_boy()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Adminmodel');
		$result['nursery']=$this->Adminmodel->view_nursery_model();
		$this->load->view('Admin/add_deliveryboy',$result);
		}
		else
		{
			$this->admin_login();
		}
	}
	public function add_deliveryboy_insert()
	{
		$nursery=$this->input->post('nursery');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		 $this->load->model('Adminmodel');
		$exe=$this->Adminmodel->dboy_already_insert($email);
		if($exe==0)
		{
		$result=array('db_nursery'=>$nursery,'db_name'=>$name,'db_password'=>$password,'db_email'=>$email);
		$this->load->model('Adminmodel');
		$exe1=$this->Adminmodel->dboy_insert_model($result);
			
				if($exe1==1)
				{
					echo "<script>alert('Succesfully Added')</script>";
					$this->delivery_boy();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->delivery_boy();
				}
		}
		else
		{
			echo "<script>alert(' Already Registered')</script>";
					$this->delivery_boy();
		}
		
	}


	public function user_details()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Adminmodel');
		$exe['user']=$this->Adminmodel->user_details_model();
		$this->load->view('Admin/user_details',$exe);
		}
		else
		{
			$this->admin_login();
		}
	}

	public function payment_details()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Adminmodel');
		$exe['payment']=$this->Adminmodel->payment_details_model();
		$this->load->view('Admin/payment_details',$exe);
		}
		else
		{
			$this->admin_login();
		}
	}
	
	public function track_order_details()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Adminmodel');
		$exe['track_order']=$this->Adminmodel->track_order_details_model();
		$this->load->view('Admin/track_order_details',$exe);
		}
		else
		{
			$this->admin_login();
		}
	}

                  
    public function Change_password()
    {
    	if($this->session->has_userdata('email'))
		{
		$this->load->model('Adminmodel');
		$exe['admin']=$this->Adminmodel->admin_fetch_model();
		$this->load->view('Admin/Change_password',$exe);
		}
		else
		{
			$this->admin_login();
		}
    }

     public function change_pass($id)
     {
     	$con_pass=$this->input->post('con_pass');
     	$name=$this->input->post('newpass');
     	if($con_pass==$name)
     	{
     	$update=array('password'=>$name);
     	$this->load->model('Adminmodel');
     	$execute=$this->Adminmodel->change_pass_model($id,$update);
     	if($execute)
     	{
     		echo "<script>alert('password updated successfully')</script>";
			$this->admin_login();
     	}
     	else
     	{
     		echo "<script>alert('Please Try Again!!')</script>";
			$this->Change_password();
     	}
     }
     	else
     	{
     		echo "<script>alert('Please Make Sure Your Passwords Match!!')</script>";
			$this->Change_password();
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












}