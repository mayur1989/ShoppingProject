<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{	
		$api="https://fakestoreapi.com/products/";
		$this->data['title'] = 'Products';
		$pdata=file_get_contents($api);
		if($pdata)
		{
			$products=json_decode($pdata);
			$products['products']= (array)$products ;
			$this->load->view('products', $products);
		}
		else
		{
			$this->load->view('errormsg');
		}
	}
	public function productdetail()
	{	
		$id = $this->uri->segment(3);
		$api="https://fakestoreapi.com/products/$id";
		$this->data['title'] = 'Products';
		$pdata=file_get_contents($api);

			$products['product']=(array)json_decode($pdata);

			$this->load->view('productdetail', $products);

	}
}