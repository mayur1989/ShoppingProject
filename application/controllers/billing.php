<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Billing_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Billing';
		
		$this->load->view('billing', $this->data);
	}
	
	public function save_order()
	{

		$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone')
		);
		if($this->session->userdata('user')=="")
		{
			$cust_id = $this->Billing_model->insert_customer($customer);
		}
		else
		{
			$cust_id=$this->session->userdata('custid');
		}
		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id,
			'custname'      => $this->input->post('name'),
			'adderss'       => $this->input->post('address'),
			'mobileno'      => $this->input->post('mobileno'),
			'emailid'       => $this->input->post('emailid'),
			'ordertotal'    => $this->input->post('ordertot')
		);		

		$ord_id = $this->Billing_model->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);		

				$cust_id = $this->Billing_model->insert_order_detail($order_detail);
			endforeach;
		endif;
		$this->load->view('successpage');
		
	}
}