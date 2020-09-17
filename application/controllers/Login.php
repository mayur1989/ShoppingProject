<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
	    parent::__construct();
	    session_start();
		$this->load->model('Login_model');
		$this->load->library('session');
	}

	public function index()
	{
		if(isset($_SESSION['userFirstName'])){
	    	redirect(base_url().'dashboard', 'refresh');
	    }else{
			$this->load->view('login');	
	    }
	}

	public function loginAction()
	{
		
        $username = $this->input->post('user');  
        $password = $this->input->post('pass'); 
        if($username=="" || $password=="")
        {
        		$data['error'] = 'Please enter username or password';  
            	$this->load->view('login', $data); 
        }
        else
        {
        $select = "*";
		$tableName = "customers";
		$where = array(
			'email' => $username, 
			'password' => $password
		);
		$result = $this->Login_model->getwheredata($select, $tableName, $where);

		if(!empty($result)){
			if($result[0]->isactive == 1){
				 $this->session->set_userdata(array('user'=>$result[0]->name,'custid'=>$result[0]->user_id)); 

				 	$api="https://fakestoreapi.com/products/";
					$this->data['title'] = 'Products';
					$pdata=file_get_contents($api);
					
						$products=json_decode($pdata);
						$products['products']= (array)$products ;
						$this->load->view('products', $products);
					
 							
			}else{
				 $data['error'] = 'Your Account is Invalid';  
            	$this->load->view('login', $data);  
			}
		}else{
			 $data['error'] = 'Username or Password is invalid';  
            $this->load->view('login', $data);  
		}
	}

	}	

	public function logoutAction()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login', 'refresh');
	}
}
