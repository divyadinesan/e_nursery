<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	public function admin_login_insert_model($email,$password)
	{
		// $this->db->where($result);
		// return $this->db->count_all_results('admin');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get()->result();
	}

	public function checkEmailCount($email) 
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		// $this->db->where('password',$password);
		return $this->db->get()->result();	
	}

	public function checkPasswordCount($password) {
		$this->db->select('*');
		$this->db->from('admin');
		// $this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get()->result();		
	}

	public function view_nursery_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_registration');
		return $this->db->get()->result();
	}
	public function view_nusry_nursery_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('Nursery_Type','Nursery');
		return $this->db->get()->result();
	}
	public function nursery_verify_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('Nursery_Type','Nursery');
		$this->db->where('Nursery_status','Waiting For Admin Approval');
		return $this->db->get()->result();
	}
	public function view_admin_nursery_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_registration');
		$this->db->where('Nursery_Type','Admin');
		return $this->db->get()->result();
	}

	public function  approve_nursery_model($id,$approve)
	{
		
		
		$this->db->where('id',$id);
		return $this->db->update('nursery_registration',$approve);
	}

	public function rejection_nursery_model($id,$rejection)
	{

		$this->db->where('id',$id);

		return $this->db->update('nursery_registration',$rejection);
	}

	public function dboy_already_insert($email)
	{
		$this->db->where('db_email',$email);
		return $this->db->count_all_results('delivery_boy');
	}

	public function dboy_insert_model($result)
	{
		return $this->db->insert('delivery_boy',$result);
	}

	public function user_details_model()
	{
		$this->db->select('*');
		$this->db->from('user_registration');
		return $this->db->get()->result();
	}

	public function payment_details_model()
	{
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->join('nursery_registration','payment.nurseryid=nursery_registration.id');
		return $this->db->get()->result();
	}

	public function track_order_details_model()
	{
		$this->db->select('*');
		$this->db->from('nursery_order');
		$this->db->join('user_registration','user_registration.user_id=nursery_order.user_id');
		return $this->db->get()->result();
	}

	public function admin_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		return $this->db->get()->result();
		
	}
	public function change_pass_model($id,$update)
	{
		$this->db->where('id',$id);
		return $this->db->update('admin',$update);
	}


















}