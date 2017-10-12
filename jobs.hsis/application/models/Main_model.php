<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {
	
	var $table1 = 'users';
    var $table2 = 'users_info';
	
	public function __construct() {
        parent::__construct();
    }

    public function insert_client($params){

        $insert_user = array(
            'username' => $params['signemail'],
            'password' => $params['signpassword'],
            'email' => $params['signemail']
            );

        $this->db->insert($this->table1, $insert_user);
        $id = $this->db->insert_id();

        $insert_user_info = array(
            'id' => $id,
            'fname' => $params['signfname'],
            'lname' => $params['signlname'],
            'email' => $params['signemail']
            );

        $this->db->insert($this->table2, $insert_user_info);

        return $id;

    }

    public function update_resume($resume_name, $resume_path, $resume_link){

        $update_info = array(
            'resume_name' => $resume_name,
            'resume_path' => $resume_path,
            'resume_link' => $resume_link
            );

        $this->db->update($this->table2, $update_info);
        $this->db->where('id', $this->session->userdata('user_id'));

    }

    public function get_my_resume(){
        $query = $this->db->query(" select * from $this->table2 where id = '".$this->session->userdata('user_id')."'");
        if($query->num_rows() > 0){
            return $query->row_array();
        }
        else{
            return false;
        }
    }

    public function log_in($post){

        $query = $this->db->query(" select * from $this->table1 where username = '".$post['logusername']."' and password = '".$post['logpassword']."' ");
        if($query->num_rows() > 0){
            return $query->row_array();
        }
        else{
            return false;
        }
    }
}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */