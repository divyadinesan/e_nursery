<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexmodel extends CI_Model {


// public function delivery_boy_login_model($result)
// {
// 	$this->db->where($result);
// 		return $this->db->count_all_results('nursery_registration');
// }
public function deliveryy_login_insert_model($email,$password)
	{
		
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('delivery_boy_email',$email);
		$this->db->where('delivery_boy_password',$password);
		return $this->db->get()->result();
	}
	public function checkEmailCount($email) 
	{
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('delivery_boy_email',$email);
		return $this->db->get()->result();	
	}

	public function checkPasswordCount($password) {
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('delivery_boy_password',$password);
		return $this->db->get()->result();		
	}







public function dlvryboy_home_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('nursery_order');
	$this->db->join('user_registration','user_registration.user_id=nursery_order.user_id');
	$this->db->where('nursery_order.delivery_boy_email',$email);
	
	return $this->db->get()->result();
}







public function order_updation_model($orderid,$odr)
{
	$email=$this->session->userdata('email');
	
	$this->db->where('nursery_order.orderid',$orderid);
	$this->db->where('nursery_order.delivery_boy_email',$email);
	return $this->db->update('nursery_order',$odr);
	
}

public function odr_updtion_cart_pymnt_model($order_id,$oder)
{
	$email=$this->session->userdata('email');
	
	$this->db->where('mycartpayment.orderid',$order_id);
	$this->db->where('mycartpayment.d_boy_email',$email);
	return $this->db->update('mycartpayment',$oder);
}











}