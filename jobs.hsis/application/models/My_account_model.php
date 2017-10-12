<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_account_model extends CI_Model {
	
    var $table = 'jobs_users';
    var $table2 = 'users_info';
	
    public function __construct() {
        parent::__construct();
    }
    
    public function user_info(){

        $query = $this->db->query(" select * from $this->table where id = '".$this->session->userdata('user_id')."' ");
        
        $query2 = $this->db->query(" select * from $this->table2 where id = '".$this->session->userdata('user_id')."'");
        
        if($query->num_rows() > 0){
            return array('user' => $query->row_array(), 'user_info' => $query2->row_array());
        }
        else{
            return false;
        }
    }

    public function save_info($data, $pic){

        $params = array(
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'lname' => $data['lname'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            );
        if($pic){
            $params['profile_pic'] = $pic[0];
            $params['profile_pic_path'] = $pic[1];
            $params['profile_pic_link'] = $pic[2];
        }
        
        $this->db->where('id',$this->session->userdata('user_id'));
        $this->db->update($this->table2,$params);
        
        if($data['password'] != ''){
            
            $params2 = array(
            'password' => $data['password'],
            );
            $this->db->where('id',$this->session->userdata('user_id'));
            $this->db->update($this->table,$params2);
        }
    }

}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */