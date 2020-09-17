<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	
function __construct(){
		// Call the Model constructor
		parent::__construct();

	}
	public function getwheredata($select,$tableName,$where){

		 $this->db->select('*');
		 $this->db->where('user_name', $this->input->post('user'));  
        $this->db->where('password', $this->input->post('pass'));  
        $query = $this->db->get('user_details');  
  
        if ($query->num_rows() == 1)  
        {  
            return $query->result();  
        } else {  
            return false;  
        }  
		
		
	}
	
}
