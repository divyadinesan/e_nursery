<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usercontroller extends CI_Controller 
{

public function user_index()
	{
		$this->load->model('Nurserymodel');
			//$this->load->model('Usermodel');
			$result['category']=$this->Nurserymodel->nursery_product_model();
		$this->load->view('user/index',$result);
	}

public function about()
	{
		$this->load->view('Admin/about');
	}

public function user_reg_insrt()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
        $address=$this->input->post('address');
        $this->load->model('Usermodel');
		$exe=$this->Usermodel->user_register_already_insert($email);
		if($exe==0)
			{
				$result=array('name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password,'address'=>$address);
				$this->load->model('Usermodel');
				$exe=$this->Usermodel->user_register_insert_model($result);
			
				if($exe==1)
				{
					echo "<script>alert('Registered')</script>";
					$this->user_index();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->user_index();
				}
			}
			else
			{
					echo "<script>alert('Already Registered!!')</script>";
					$this->user_index();
			}

	}

public function user_login_insert()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$result=array('email'=>$email,'password'=>$password);
		$this->load->model('Usermodel');
		$count=$this->Usermodel->userr_login_insert_model($email,$password);
		$checkEmailCount=$this->Usermodel->checkEmailCount($email);
		$checkPasswordCount=$this->Usermodel->checkPasswordCount($password);
		if(count($count)>0)
		{
			echo "<script>alert ('Welcome To E-Nursery')</script>";
			$this->session->set_userdata('email',$email);
			$this->user_category();
		} elseif (empty($checkEmailCount)) {
			echo "<script>alert ('Please Enter Correct Email id')</script>";
			$this->user_index();	
		} elseif (empty($checkPasswordCount)) {
			echo "<script>alert ('Please Enter Correct Password')</script>";
			$this->user_index();	
		}
		else
		{
			echo "<script>alert ('Please Enter Correct Email id / Password')</script>";
			$this->user_index();
		}

	}

public function user_nursery()
	{
		if($this->session->has_userdata('email'))
		{
			$nursery_id=$this->input->post('nursery_id');
			$this->load->model('Nurserymodel');
			$result['nursery']=$this->Nurserymodel->nursery_nurery_model();
			$this->session->set_userdata('nursery_id',$nursery_id);
			$this->load->view('User/user_nursery',$result);
		}
		else
		{
			$this->user_index();
		}
	}


public function user_category()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Nurserymodel');
			//$this->load->model('Usermodel');
			$result['category']=$this->Nurserymodel->nursery_product_model();
			$this->load->view('User/user_category',$result);
		}
		else
		{
			$this->user_index();
		}
	}


public function user_category_type($category_id)
	{
		if($this->session->has_userdata('email'))
	    { 
		 	$this->load->model('Usermodel');
	 		$result['fetch']=$this->Usermodel->user_category_type_model($category_id);
			$result['product_seed']=$this->Usermodel->plant_seed_model($category_id);
			$this->load->view('User/user_category_type',$result);
	    }
	    else
	    {
	    		$this->user_index();
	    }
	}

public function user_category_sf_type($category_id)
	{
		if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
			$result['fetch']=$this->Usermodel->user_category_type_model($category_id);
			$result['soil_fertlizer']=$this->Usermodel->plant_seed_model($category_id);
	    	$this->load->view('User/user_category_sf_type',$result);
	    }
	     else
	    {
	    		$this->user_index();
	    }

	}

public function user_soilfertlizer_single($ps_id)
{
	 if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
		 	$result['fetch']=$this->Usermodel->user_soilfertlizer_single_model($ps_id);
		 	$result['review']=$this->Usermodel->user_review_fetch_model($ps_id);
		 	$result['user']=$this->Usermodel->user_profile_model();
	    	$this->load->view('User/user_soilfertlizer_single',$result);
	    }
	    else
	    {
	    	$this->user_index();
	    }
}

public function user_plantseed_single($ps_id)
	{
		 if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
		 	$result['fetch']=$this->Usermodel->user_plantseed_single_model($ps_id);
		 	$result['review']=$this->Usermodel->user_review_fetch_model($ps_id);
		 	$result['user']=$this->Usermodel->user_profile_model();
	    	$this->load->view('User/user_plantseed_single',$result);
	    }
	    else
	    {
	    	$this->user_index();
	    }

	}

public function user_soilfertilizer($category_type_id,$category_id)
	{
		if($this->session->has_userdata('email'))
	    {
	    	$this->load->model('Usermodel');
	    	$this->load->model('Nurserymodel');
	    	$result['category_type']=$this->Nurserymodel->nursery_cat_type_model($category_id);
	    	$result['fetch']=$this->Usermodel->plant_seed_model($category_id);
	    	$this->load->view('User/user_soilfertilizer',$result);
	    }
	    else
	    {
	    		$this->user_index();
	    }

	}
public function user_plantseed($category_type_id,$category_id)
	{
		if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
	    	$this->load->model('Nurserymodel');
	    	$result['category_type']=$this->Nurserymodel->nursery_cat_type_model($category_id);
		 	$result['fetch']=$this->Usermodel->user_plantseed_model($category_type_id);
	    	$this->load->view('User/user_plantseed',$result);
	    }
	    else
	    {
	    	$this->user_index();
	    }	
	}

public function user_profile()
	{
		 if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
	    	$result['profile']=$this->Usermodel->user_profile_model();
	    	$this->load->view('User/user_profile',$result);
	    }
	    else
	    {
	    	$this->user_index();
	    }

	}

public function profile_updation()
	{
		 $id=$this->input->post('id');
		 $name=$this->input->post('name');
		 $email=$this->input->post('email');
		 $phone=$this->input->post('phone');
		 $password=$this->input->post('password');
		 $address=$this->input->post('Address');
		$update=array('name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password,'address'=>$address);
		$this->load->model('Usermodel');
		$exe=$this->Usermodel->profile_updation_model($update,$id);
		if($exe==1)
		{
			echo "<script>alert ('Updation Succesfully')</script>";
			$this->user_profile();
		}
		else
		{
			echo "<script>alert ('Try Again')</script>";
			$this->user_profile();
			

		}
	}

public function user_nursery_product($nursery_id)
	{
		if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
	    	$result['category_type']=$this->Usermodel->user_category_type_nsryfetch_model($nursery_id);
	    	$result['fetch']=$this->Usermodel->user_nursery_product_model($nursery_id);
	    	$this->load->view('User/user_nursery_product',$result);
	    }
	     else
	    {
	    	$this->user_index();
	    }


	}

public function user_plantseed_nsry($ctgry_tye_id,$nursery_id)
	{
		if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
	    	 $result['category_type']=$this->Usermodel->user_category_type_nsryfetch_model($nursery_id);
	    	 $result['plntseed']=$this->Usermodel->user_plantseed_nsry_model($ctgry_tye_id,$nursery_id);
	    	$this->load->view('User/user_plantseed_nsry',$result);
	    }
	     else
	    {
	    		$this->user_index();
	    }
	}

public function ps_addtocart()
	{
		if($this->session->has_userdata('email'))
	    {
	    $delivery_boy_email=$this->input->post('delivery_boy_email');
	    $category_id=$this->input->post('category_id');
	    $quantity=$this->input->post('quantity');
	    $userid=$this->input->post('userid');
		$useremail=$this->input->post('useremail');
		$nurseryemail=$this->input->post('nurseryemail');
		$nurseryid=$this->input->post('nurseryid');
		$psid=$this->input->post('psid');
		$price=$this->input->post('price');
		$cartdate=date('y-m-d');
		$this->load->model('Usermodel');
		$count=$this->Usermodel->mycart_already_insert($psid);

		if($count==0)
		{
		 $result=array('quantity'=>$quantity,'userid'=>$userid,'useremail'=>$useremail,'nurseryemail'=>$nurseryemail,'nurseryid'=>$nurseryid,'productid'=>$psid,'price'=>$price,'cartdate'=>$cartdate,'category_id'=>$category_id,'subtotal'=>$quantity*$price,'d_boy_email'=>$delivery_boy_email);
		$this->load->model('Usermodel');
		$exe=$this->Usermodel->ps_addtocart_model($result);

				if($exe==1)
				{
						echo "<script>alert('Added')</script>";
						$this->mycart();
				}
				else
				{
					echo "<script>alert('failed')</script>";
					$this->user_index();
				}
		}
		else
		{
			$result3=array('quantity'=>$quantity);
		 	$this->load->model('Usermodel');
				$exe1=$this->Usermodel->quantity_updatecart_model($result3,$psid);
				if($exe1==1)
				{
					echo "<script>alert('Added')</script>";
					$this->mycart();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->user_index();
				}

			
		}
	    }
	     else
	    {
	    		$this->user_index();
	    }

	}


public function mycart()
	{
		if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
	    	$exe['nursery']=$this->Usermodel->groupby_enursery();
	    	$exe['mycart']=$this->Usermodel->mycart_model();
	    	$this->load->view('User/mycart',$exe);
	    }
		else
		{
			echo "<script>alert('failed')</script>";
			$this->user_index();
		}
	}
public function cart_remove($productid)
	{
		if($this->session->has_userdata('email'))
	    { 
	    	$this->load->model('Usermodel');
				$exe1=$this->Usermodel->cart_remove_model($productid);
				if($exe1==1)
				{
				$this->load->model('Usermodel');
				$exe2=$this->Usermodel->cartpayment_remove_model($productid);
				if($exe2==1)
				{
					echo "<script>alert('Deleted')</script>";
					$this->mycart();
				}
				else
				{
					echo "<script>alert('failed')</script>";
					$this->user_index();
				}
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->user_index();
				}
	    }
	     else
	    {
	    		$this->user_index();
	    }
	}
	
public function  checkout()
	{
		if($this->session->has_userdata('email'))
	    {
	    	$this->load->model('Usermodel');

		 	$exe['user']=$this->Usermodel->user_profile_model();
		 	$exe['nursery']=$this->Usermodel->groupby_enursery();
	    	$exe['mycart']=$this->Usermodel->mycart_model();
	    		$this->load->view('User/checkout',$exe);
	    }
	     else
	    {
	    		$this->user_index();
	    }
		
	}

public function  payment()
	{
		if($this->session->has_userdata('email'))
	    {
	    	$nursery_id=$this->input->post('nursery_id');
	    	$this->load->model('Usermodel');
	    	$exe['user']=$this->Usermodel->user_profile_model();
	    	$exe['mycart']=$this->Usermodel->mycart_payment_model($nursery_id);
	    	$this->load->view('User/payment',$exe);
	    }
	     else
	    {
	    		$this->user_index();
	    }
		
	}
public function payinsrt()
{
	if($this->session->has_userdata('email'))
	{
	    $delivery_boy_email=$this->input->post('d_boy_email');
	    $nurseryid=$this->input->post('nurseryid');
		$nurserymail=$this->input->post('nurserymail');	
		$usr_id	=$this->input->post('userid');
		$usr_email=$this->input->post('usermail');	
		$c_name	=$this->input->post('name');
		$c_number=$this->input->post('number');	
		$exp_date=$this->input->post('expdate');	
		$cvv=$this->input->post('cvv');	
		$pay_date=date('y-m-d');
		
		$amount=$this->input->post('Amount');
		$variable=array('usr_id'=>$usr_id,'usr_email'=>$usr_email,'c_name'=>$c_name,'c_number'=>$c_number,'exp_date'=>$exp_date,'cvv'=>$cvv,'pay_date'=>$pay_date,'amount'=>$amount,'nurseryid'=>$nurseryid,'nurserymail'=>$nurserymail,'orderid'=>$nurseryid+$amount,'delivery_boy_email'=>$delivery_boy_email);
		$this->load->model('Usermodel');
		$exe=$this->Usermodel->payment_insert_model($variable);
		if($exe==1)
		{
			$orderinsrt=array('order_id'=>$nurseryid+$amount,'nsry_id'=>$nurseryid,'nsry_email'=>$nurserymail,'user_id'=>$usr_id,'paymentstatus'=>'Payed','order_sts'=>'ON HOLD','amount'=>$amount,'delivery_boy_email'=> $delivery_boy_email,'user_email'=>$usr_email);
			$this->load->model('Usermodel');
			$exe3=$this->Usermodel->orderinsrt_model($orderinsrt);
				if($exe3==1)
				{
					
						$this->load->library('form_validation');
						$this->form_validation->set_rules('cartid[]', 'cart_id', 'required');
						$this->form_validation->set_rules('productid[]', 'productid', 'required');

						$this->form_validation->set_rules('userid', 'userid', 'required');
						$this->form_validation->set_rules('useremail', 'useremail', 'required');
						$this->form_validation->set_rules('nurseryemail', 'nurseryemail', 'required');
						$this->form_validation->set_rules('nurseryid', 'nurseryid', 'required');
						$this->form_validation->set_rules('price[]', 'price', 'required');
						$this->form_validation->set_rules('quantity[]', 'quantity', 'required');
						$this->form_validation->set_rules('subtotal[]', 'subtotal', 'required');
						$this->form_validation->set_rules('category_id[]', 'category_id', 'required');
						$this->form_validation->set_rules('d_boy_email', 'd_boy_email', 'required');
						


						if ($this->form_validation->run())
						{
						$data = $this->input->post();
						for ($i=0; $i <count($data['cartid']) ; $i++)
					{ 
						
						$dataArr['cart_id'] = $data['cartid'][$i];

						$dataArr['orderid'] = $nurseryid+$amount;
						$dataArr['quantity'] = $data['quantity'][$i];
						$dataArr['userid'] = $data['userid'];
						$dataArr['useremail'] = $data['useremail'];
						$dataArr['nurseryemail'] = $data['nurseryemail'];
						$dataArr['nurseryid'] = $data['nurseryid'];
						$dataArr['productid'] = $data['productid'][$i];
						$dataArr['price'] = $data['price'][$i];
						$dataArr['pay_status'] = 'Payed';

						$dataArr['category_id'] = $data['category_id'][$i];
						$dataArr['order_status'] = 'invalid';
						$dataArr['subtotal'] = $data['subtotal'][$i];
						$dataArr['d_boy_email'] = $data['d_boy_email'];
						


						

							$this->load->model('Usermodel');
							$exee=$this->Usermodel->addtocart_pay_model($dataArr);

						
 					}	
 						if($exee)
 						{
						//print_r($data);die();
						
						$this->load->model('Usermodel');
						$exe2=$this->Usermodel->clearcart_model($nurseryid);
						if($exe2==1)
						{
						echo "<script>alert('Payment Completed')</script>";
						$this->trackorders();
						}
						else
						{
						echo "<script>alert('failed')</script>";
						$this->mycart();
						}
						}
						else
						{
							echo "<script>alert('failed')</script>";
						$this->mycart();
						}
					}


}

					else
					{
						echo "<script>alert('failed')</script>";
						$this->mycart();
					}
				
		}
		else
		{
		
			echo "<script>alert('failed')</script>";
			$this->user_index();
		}
	}
	else
	{
		$this->user_index();
	}
}
public function Complaint()
	{
		if($this->session->has_userdata('email'))
	    {
	    	
			$this->load->model('Usermodel');
	    	$Arrdata['order']=$this->Usermodel->order_all_fetch_model();
	    	$this->load->view('User/Complaint',$Arrdata);
	    }
	     else
	    {
	    	$this->user_index();
	    }
	}
public function trackorders()
	{
		if($this->session->has_userdata('email'))
	    {
	    	$this->load->model('Usermodel');
	    	$exe['order']=$this->Usermodel->order_all_fetch_model();
			
	    	$this->load->view('User/trackorders',$exe);
	    }
	     else
	    {
	    	$this->user_index();
	    }

	}
	public function Register_Complaint($orderid)
	{
		if($this->session->has_userdata('email'))
	    {
	    	
			$this->load->model('Usermodel');
	    	$exe['details']=$this->Usermodel->review_fetch_model($orderid);
	    	$this->load->view('User/Register_Complaint',$exe);
	    }
	     else
	    {
	    	$this->user_index();
	    }
	}
	public function complaintinsert()
	{
		 $quantity=$this->input->post('quantity');
		 $total=$this->input->post('total');
		  $user_id=$this->input->post('user_id');
		 $product_id=$this->input->post('product_id');	
		 $nursery_id=$this->input->post('nursery_id');
		 $order_id=$this->input->post('order_id');	
		 $user_email=$this->input->post('user_email');
		 $nursery_email=$this->input->post('nursery_email');	
		 $complaint=$this->input->post('complaint');
		$image=$_FILES['cmplnt']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/user/complaint';
			 $config['allowed_types']= 'jpeg|png|jpg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('cmplnt'))
			{
               $complaintins=array('user_id'=>$user_id,'product_id'=> $product_id,'nursery_id'=>$nursery_id,'order_id'=>$order_id,'user_email'=>$user_email,'nursery_email'=>$nursery_email,'Complaint'=>$complaint,'complaint_upload'=>$photo,'complaint_response'=>'Pending','quantity'=>$quantity,'total'=>$total);
		$this->load->model('Usermodel');
		$exe=$this->Usermodel->complaint_insert_model($complaintins);
               if($exe==1)
               {
               	echo "<script>alert ('Succesfully Registered Complaint!!')</script>";
			$this->Complaint();
		}
		else
		{
			echo "<script>alert ('Try Again')</script>";
			$this->Complaint();

               	

			}
		}
			else
			{
				echo "<script>alert('Upload Video Or Image is not supporting')</script>";
					$this->Complaint();
			}
	}

	public function review($orderid)
	{
		if($this->session->has_userdata('email'))
	    {
	    	
			$this->load->model('Usermodel');
	    	$exe['review_ftch']=$this->Usermodel->review_fetch_model($orderid);
	    	$this->load->view('User/review',$exe);
	    }
	     else
	    {
	    	$this->user_index();
	    }
	}
	public function reviewinsert()
	{
		 $rating=$this->input->post('rating');
	     $user_id=$this->input->post('user_id');
		 $product_id=$this->input->post('product_id');	
		 $nursery_id=$this->input->post('nursery_id');
		 $order_id=$this->input->post('order_id');	
		 $user_email=$this->input->post('user_email');
		 $nursery_email=$this->input->post('nursery_email');	
		 $review=$this->input->post('review');	
		 $reviewins=array('rating'=>$rating,'user_id'=>$user_id,'product_id'=> $product_id,'nursery_id'=>$nursery_id,'order_id'=>$order_id,'user_email'=>$user_email,'nursery_email'=>$nursery_email,'review'=>$review);
		$this->load->model('Usermodel');
		$exe=$this->Usermodel->review_insert_model($reviewins);
		if($exe==1)
		{
			echo "<script>alert ('Succesfully')</script>";
			$this->trackorders();
		}
		else
		{
			echo "<script>alert ('Try Again')</script>";
			$this->trackorders();
			

		}
		
		
	} 

	public function response()
	{
		if($this->session->has_userdata('email'))
	    {
	    	
			
			$this->load->model('Usermodel');
	    	$exe['response']=$this->Usermodel->response_fetch_model();
	    	
	    	$this->load->view('User/response',$exe);
	    }
	     else
	    {
	    	$this->user_index();
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