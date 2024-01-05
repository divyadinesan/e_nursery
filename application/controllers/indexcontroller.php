<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexcontroller extends CI_Controller 
{





public function index()
{
	
			
		$this->load->model('Nurserymodel');
		$result['category']=$this->Nurserymodel->nursery_product_model();
			$result['nursery']=$this->Nurserymodel->nursery_nurery_model();
		$this->load->view('index/index',$result);
}

public function delivery_boy_login()
{
	$this->load->view('index/dlvryboy_login');
}
public function dlvry_boy_login()
{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$result=array('delivery_boy_email'=>$email,'delivery_boy_password'=>$password);
		$this->load->model('Indexmodel');
		$count=$this->Indexmodel->deliveryy_login_insert_model($email,$password);
		$checkEmailCount=$this->Indexmodel->checkEmailCount($email);
		$checkPasswordCount=$this->Indexmodel->checkPasswordCount($password);
		if(count($count)>0)
		{
			echo "<script>alert ('Welcome To E-Nursery')</script>";
			$this->session->set_userdata('email',$email);
			$this->dlvryboy_home();
		} elseif (empty($checkEmailCount)) {
			echo "<script>alert ('Please Enter Correct Email id')</script>";
			$this->delivery_boy_login();	
		} elseif (empty($checkPasswordCount)) {
			echo "<script>alert ('Please Enter Correct Password')</script>";
			$this->delivery_boy_login();	
		}
		else
		{
			echo "<script>alert ('Please Enter Correct Email id / Password')</script>";
			$this->delivery_boy_login();
		}
}

public function dlvryboy_home()
{
	if($this->session->has_userdata('email'))
	{
		$this->load->model('Indexmodel');
		$result['order']=$this->Indexmodel->dlvryboy_home_model();
	$this->load->view('index/dlvryboy_home',$result);
	}
	else
	{
		$this->delivery_boy_login();
	}
}
public function order_updation($orderid,$order_id)
{
	if($this->session->has_userdata('email'))
	{
		$stats=$this->input->post('Status');
		$odr=array('order_sts'=>$stats);
		$this->load->model('Indexmodel');
		$delivered=$this->Indexmodel->order_updation_model($orderid,$odr);
		if($delivered==1)
		{
			$oder=array('order_status'=>$stats);
			$this->load->model('Indexmodel');
			$dlvrd_cart_pymnt=$this->Indexmodel->odr_updtion_cart_pymnt_model($order_id,$oder);
			if($dlvrd_cart_pymnt)
			{

				echo "<script>alert ('Successfully Updated!!!!')</script>";
				$this->dlvryboy_home();
			}
			else
			{
				echo "<script>alert ('Try Again')</script>";
			$this->dlvryboy_login();
			}
		}
		else
		{
			echo "<script>alert ('Try Again')</script>";
			$this->dlvryboy_login();
		}
	}
	else
	{
		$this->delivery_boy_login();
	}
}


















































}