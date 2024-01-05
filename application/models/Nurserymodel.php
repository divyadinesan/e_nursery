<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nurserymodel extends CI_Model {

	public function register_insert_model($result)
	
	{
		return $this->db->insert('nursery_registration',$result);
	}
	public function register_already_insert($email)
	{
		$this->db->where('email',$email);
		return $this->db->count_all_results('nursery_registration');
	}

	public function nurseryy_login_insert_model($email,$password)
	{
		
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get()->result();
	}
	public function checkEmailCount($email) 
	{
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('email',$email);
		return $this->db->get()->result();	
	}

	public function checkPasswordCount($password) {
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('password',$password);
		return $this->db->get()->result();		
	}






	
	// public function login_insert_model($result)
	// {
	// 	$this->db->where($result);
	// 	return $this->db->count_all_results('nursery_registration');
	// }

	public function category_insert_model($result)
	{
		return $this->db->insert('nursery_category',$result);
	}
	public function category_type_insert_model($result)
	{
		return $this->db->insert('nursery_category_type',$result);
	}
	
public function category_type_already_insert($name)
{
	$this->db->where('category_type_name',$name);
		return $this->db->count_all_results('nursery_category_type');
}
	public function category_already_insert($name)
	{
		$this->db->where('category_name',$name);
		return $this->db->count_all_results('nursery_category');
	}

	public function nursery_product_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_category');
		return $this->db->get()->result();
	}
	public function category_delete_model($category_id)
	{
		$this->db->where('category_id',$category_id);
		return $this->db->delete('nursery_category');
	}
	public function category_fetch_model($category_id)
	{
		$this->db->where('category_id',$category_id);
		$this->db->select('*');
		$this->db->from('nursery_category');
		return $this->db->get()->result();
	}
	public function delete_category_type_model($category_type_id)
	{
		$this->db->where('category_type_id',$category_type_id);
		return $this->db->delete('nursery_category_type');
	}
	 public function nursery_cat_type_model($category_id)
	 {

	 	$this->db->select('*');
	 	$this->db->from('nursery_category_type');
	 	$this->db->where('catgry_id',$category_id);
	 	return $this->db->get()->result();
	 }

	 public function soil_fertilizer_updated_model($result,$product_id)
	 {
	 	$this->db->where('ps_id',$product_id);
		return $this->db->update('product',$result);
	 }
	  public function nur_cat_type_model()
	 {

	 	$this->db->select('*');
	 	$this->db->from('nursery_category_type');
	 	//$this->db->where('catgry_id',$category_id);
	 	return $this->db->get()->result();
	 }
	  public function nursery_category_type_join_model()
	 {

	 	$this->db->select('*');
	 	$this->db->from('nursery_category_type');
	 	$this->db->join('nursery_category','nursery_category.category_id =nursery_category_type.catgry_id');
	 	return $this->db->get()->result();
	 }
	public function nursery_id_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('email',$email);
		return $this->db->get()->result();
	}
	public function nursery_update_model($result,$nursery_id)
	{
		$this->db->where('id',$nursery_id);
		return $this->db->update('nursery_registration',$result);
	}

	public function nursery_product_insert_model()
	{
		return $this->db->insert('nursery_product');
	}

	
	public function plnt_seedt_already_insert($ps_name)
	{
		$this->db->where('ps_name',$ps_name);
		return $this->db->count_all_results('product');
	}

	public function category_update_model($result,$category_id)
	{
		$this->db->where('category_id',$category_id);
		return $this->db->update('nursery_category',$result);
	}

	public function plantseeds_fetch_model($ps_id)
	{

	 	$this->db->select('*');
	 	$this->db->from('product');
	 	$this->db->where('ps_id',$ps_id);
	 	return $this->db->get()->result();
	}

	public function product_insert_model($result)
	{
		return $this->db->insert('product',$result);
	}
	public function plantssed_fetch_model()
	{
		$email=$this->session->userdata('email');
	 	$this->db->where('nursery_email',$email);
	 	$this->db->select('*');
	 	$this->db->from('nursery_category_type');
	 	$this->db->join('product','nursery_category_type.category_type_id=product.ps_catgry_type_id');
	 	$this->db->join('nursery_category','nursery_category_type.catgry_id=nursery_category.category_id');
	 	return $this->db->get()->result();
	}
	public function delete_plantseed_model($ps_id)
	{
		$this->db->where('ps_id',$ps_id);
		return $this->db->delete('product');
	}
	public function product_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_product');
		return $this->db->get()->result();
	}

	public function delete_product_model($product_id)
	{
		$this->db->where('product_id',$product_id);
		return $this->db->delete('nursery_product');
	}

	public function edit_product_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_category');
		return $this->db->get()->result();
	}

	public function product_fetch__id_model($id)
	{
		$this->db->where('product_id',$id);
		$this->db->select('*');
		$this->db->from('nursery_product');
		return $this->db->get()->result();
	}

	public function product_update_model($result,$product_id)
	{
			$this->db->where('product_id',$product_id);
		return  $this->db->update('nursery_product',$result);
	}


	public function fetch_category_type_model($category_type_id)
	{
		$this->db->where('category_type_id',$category_type_id);
		$this->db->select('*');
		$this->db->from('nursery_category_type');
		return $this->db->get()->result();
	}

	public function edit_category_type_model($result,$category_type_id)
	{
		$this->db->where('category_type_id',$category_type_id);
		return  $this->db->update('nursery_category_type',$result);
	}

	public function plnt_seed_update_model($result,$ps_id)
	{
		$this->db->where('ps_id',$ps_id);
		return  $this->db->update('product',$result);
	}

	public function nursery_fertilizer_fetch_model($ps_id)
	{
		$this->db->where('ps_id',$ps_id);
		$this->db->select('*');
		$this->db->from('product');
		return $this->db->get()->result();
	}

	public function nursery_nurery_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('Nursery_status','Approve');
		return $this->db->get()->result();
	}
	 public function nursery_category_type_model()
	 {

	 	$this->db->select('*');
	 	$this->db->from('nursery_category_type');
	 	//$this->db->where('catgry_id',$category_id);
	 	return $this->db->get()->result();
	 }

	 public function soil_fertilizer_already_insert($name)
	 {
	 	$this->db->where('ps_name',$name);
	 	$this->db->count_all_results('product');
	 }

	 public function soil_fertilizer_insert_model($insert)
	 {
	 	return $this->db->insert('product',$insert);
	 }

	 public function soil_fertilizer_nursery()
	 {
	 	$email=$this->session->userdata('email');
	 	$this->db->where('email',$email);
	 	$this->db->select('*');
	 	$this->db->from('nursery_registration');
	 	return $this->db->get()->result();
	 }

	 public function soil_fertilizer_fetch_model()
	 {
	 	$email=$this->session->userdata('email');
	 	$this->db->where('nursery_email',$email);
	 	$this->db->select('*');
	 	$this->db->from('product');
	 	return $this->db->get()->result();
	 }
	 public function delete_soilfertliser_model($ps_id)
	 {
	 	$this->db->where('ps_id',$ps_id);
		return $this->db->delete('product');
	 }

	 public function user_payment_details_model()
	 {
	 	$email=$this->session->userdata('email');
	 	$this->db->where('nursery_order.nsry_email',$email);
	 	$this->db->select('*');
	 	$this->db->from('nursery_order');
	 	$this->db->join('payment','payment.orderid=nursery_order.order_id');
	 	$this->db->join('user_registration','user_registration.user_id =nursery_order.user_id');
	 	$this->db->join('nursery_registration','nursery_registration.id =nursery_order.nsry_id');
	 	
	 	return $this->db->get()->result();
	 }


	 public function review_fetch_model()
	 {
	 	$email=$this->session->userdata('email');
	 	$this->db->select('*');
	 	$this->db->from('review');
	 	$this->db->join('user_registration','user_registration.user_id =review.user_id');
	 	$this->db->join('product','product.ps_id =review.product_id');
	 	$this->db->where('review.nursery_email',$email);
	 	return $this->db->get()->result();
	 }
	 public function complaint_fetch_model()
	 {
	 	$email=$this->session->userdata('email');
	 	$this->db->select('*');
	 	$this->db->from('complaint');
	 	$this->db->join('user_registration','user_registration.user_id =complaint.user_id');
	 	$this->db->join('product','product.ps_id =complaint.product_id');
	 	$this->db->where('complaint.nursery_email',$email);
	 		$this->db->where('complaint_response','Pending');
	 	return $this->db->get()->result();
	 }
	 public function customer_complaint_fetch_model()
	 {
	 	$this->db->select('*,user_registration.name as customer_name');
	 	$this->db->from('complaint');
	 	$this->db->join('user_registration','user_registration.user_id =complaint.user_id');
	 	$this->db->join('product','product.ps_id =complaint.product_id');
	 	$this->db->join('nursery_registration','nursery_registration.email =complaint.nursery_email');
	 	return $this->db->get()->result();
	 }

	 public function response_model($complaint_id,$ArrData )
	 {
	 	$this->db->where('complaint_id',$complaint_id);
	 
	 	return $this->db->update('complaint',$ArrData);

	 }
	
	
















}