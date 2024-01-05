<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	public function user_register_already_insert($email)
	{
		$this->db->where('email',$email);
		return $this->db->count_all_results('user_registration');
	}
	public function userr_login_insert_model($email,$password)
	{
		
		$this->db->select('*');
		$this->db->from('user_registration');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get()->result();
	}
	public function checkEmailCount($email) 
	{
		$this->db->select('*');
		$this->db->from('user_registration');
		$this->db->where('email',$email);
		return $this->db->get()->result();	
	}

	public function checkPasswordCount($password) {
		$this->db->select('*');
		$this->db->from('user_registration');
		$this->db->where('password',$password);
		return $this->db->get()->result();		
	}
	public function mycart_already_insert($psid)
	{
		$this->db->where('productid',$psid);
		return $this->db->count_all_results('mycart');
	}
	public function user_register_insert_model($result)
	{
		return $this->db->insert('user_registration',$result);
	}
	public function user_login_insert_model($result)
	{
		$this->db->where($result);
		return $this->db->count_all_results('user_registration');
	}
	public function user_category_type_model($category_id)
	{
		$this->db->select('*');
		$this->db->from('nursery_category_type');
		$this->db->where('catgry_id',$category_id);
		return $this->db->get()->result();
	}

	public function plant_seed_model($category_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		 $this->db->join('nursery_category_type','nursery_category_type.category_type_id=product.ps_catgry_type_id');
		$this->db->where('nursery_category_type.catgry_id',$category_id);
		return $this->db->get()->result();
	}


	public function user_soilfertlizer_single_model($ps_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		 $this->db->join('nursery_registration','nursery_registration.id=product.ps_nursery_id');
		 $this->db->join('nursery_category_type','nursery_category_type.category_type_id=product.ps_catgry_type_id');
		$this->db->where('product.ps_id',$ps_id);
		return $this->db->get()->result();
	}


	public function user_plantseed_single_model($ps_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		 $this->db->join('nursery_registration','nursery_registration.id=product.ps_nursery_id');
		  $this->db->join('nursery_category_type','nursery_category_type.category_type_id=product.ps_catgry_type_id');
		$this->db->where('ps_id',$ps_id);
		return $this->db->get()->result();
	}

	public function user_plantseed_model($category_type_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('ps_catgry_type_id',$category_type_id);
		return $this->db->get()->result();
	}

	public function user_profile_model()
	{
	$email=$this->session->userdata('email');
	$this->db->where('email',$email);
	$this->db->select('*');
	$this->db->from('user_registration');
	return $this->db->get()->result();
	}

	public function profile_updation_model($update,$id)
	{
		$this->db->where('user_id',$id);
		return $this->db->update('user_registration',$update);
	}

	public function user_nursery_product_model($nursery_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('nursery_category_type','nursery_category_type.category_type_id =product.ps_catgry_type_id');
		$this->db->join('nursery_category','nursery_category_type.catgry_id =nursery_category.category_id ');
		$this->db->where('ps_nursery_id',$nursery_id);
		return $this->db->get()->result();
	}
	public function user_category_type_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_category_type');
		
		return $this->db->get()->result();
	}
	public function user_plantseed_nsry_model($ctgry_tye_id,$nursery_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('ps_catgry_type_id	',$ctgry_tye_id);
		$this->db->where('ps_nursery_id	',$nursery_id);
		return $this->db->get()->result();
	}

	public function user_category_type_nsryfetch_model($nursery_id)
	{
		$this->db->select('*');
		$this->db->from('nursery_category_type');
		$this->db->group_by('nursery_category_type.category_type_name');
		$this->db->join('product','product.ps_catgry_type_id=nursery_category_type.category_type_id');
		$this->db->where('product.ps_nursery_id',$nursery_id);
		return $this->db->get()->result();
	}


	public function ps_addtocart_model($result)
	{
		return $this->db->insert('mycart',$result);
	}
	public function addtocart_pay_model($dataArr)
	{
		return $this->db->insert('mycartpayment',$dataArr);
	}
	public function mycart_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('mycart');
		$this->db->join('product','product.ps_id=mycart.productid');
		$this->db->join('nursery_category','nursery_category.category_id =mycart.category_id');
		$this->db->where('mycart.useremail',$email);
		return $this->db->get()->result();

	}
	public function mycart_payment_model($nursery_id)
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('mycart');
		$this->db->join('product','product.ps_id=mycart.productid');
		$this->db->join('nursery_category','nursery_category.category_id=mycart.category_id');
		$this->db->where('mycart.useremail',$email);
		$this->db->where('mycart.nurseryid',$nursery_id);
		return $this->db->get()->result();

	}

	public function quantity_updatecart_model($result3,$psid)
	{
		$this->db->where('productid',$psid);
		return $this->db->update('mycart',$result3);
	}
	public function cart_remove_model($productid)
	{
		$email=$this->session->userdata('email');
		$this->db->where('mycart.useremail',$email);
		$this->db->where('productid',$productid);
		return $this->db->delete('mycart');
	}
	public function cartpayment_remove_model($productid)
	{
		$email=$this->session->userdata('email');
		$this->db->where('mycartpayment.useremail',$email);
		$this->db->where('productid',$productid);
		return $this->db->delete('mycartpayment');
	}
	public function payment_insert_model($variable)
	{
		return $this->db->insert('payment',$variable);

	}
	public function updatecartpayment_model($payed,$nurseryid)
	{
		$email=$this->session->userdata('email');
		$this->db->where('mycartpayment.useremail',$email);
		$this->db->where('mycartpayment.nurseryid',$nurseryid);
		//$this->db->where('mycartpayment.order_status <>',$orderstatus);
		return $this->db->update('mycartpayment',$payed);
	}

	public function groupby_enursery()
	{
		$this->db->select('*');
		$this->db->from('mycart');
		$this->db->group_by('mycart.nurseryemail');
		$this->db->join('nursery_registration','nursery_registration.email=mycart.nurseryemail');
		return $this->db->get()->result();
	}

	public function clearcart_model($nurseryid)
	{
		$email=$this->session->userdata('email');
		$this->db->where('nurseryid',$nurseryid);
		$this->db->where('useremail',$email);
		return $this->db->delete('mycart');
	}

	
	public function orderinsrt_model($orderinsrt)
	{
		return $this->db->insert('nursery_order',$orderinsrt);
	}
	public function order_all_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('nursery_order');
		$this->db->where('user_email',$email);
		$this->db->join('nursery_registration','nursery_registration.email=nursery_order.nsry_email');
		return $this->db->get()->result();
	}


	public function review_fetch_model($orderid)
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('mycartpayment');
		$this->db->join('nursery_order','mycartpayment.orderid=nursery_order.order_id');
		$this->db->join('product','product.ps_id=mycartpayment.productid');
		$this->db->where('nursery_order.user_email',$email);
		$this->db->where('nursery_order.orderid',$orderid);
		return $this->db->get()->result();
	}

	public function response_fetch_model()
	{

		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('complaint');
		// $this->db->join('nursery_order','complaint.order_id=nursery_order.order_id');
		 $this->db->join('product','product.ps_id=complaint.product_id');
		$this->db->where('user_email',$email);
		return $this->db->get()->result();
	}
	

	
	public function review_insert_model($reviewins)
	{
		return $this->db->insert('review',$reviewins);
	}
	
	public function user_review_fetch_model($ps_id)
	{
		
		$this->db->select('*');
		$this->db->from('review');
		$this->db->join('user_registration','user_registration.user_id=review.user_id');
		$this->db->where('review.product_id',$ps_id);
		return $this->db->get()->result();
	}
	public function complaint_insert_model($complaintins)
	{
		return $this->db->insert('complaint',$complaintins);
	}
	// public function count_complaint()
	// {
	// 	$this->db->select('count(order_id)');
	// 	$this->db->from('complaint');
	// 	return $this->db->get()->result();

	// }
	
	

















}