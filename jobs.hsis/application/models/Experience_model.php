<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Experience_model extends CI_Model {
	
    var $table = 'experience';
	
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_experience(){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and deleted != '1' ");
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    public function get_experience_info($id){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

    public function save_experience($params){

        $insert = array(
            'user_id' => $this->session->userdata('user_id'),
            'position_title' => $params['position_title'],
            'company_name' => $params['company_name'],
            'duration_from' => $params['duration_from_year'].'-'.$params['duration_from_month'].'-01',
            'duration_to' => $params['duration_to_year'].'-'.$params['duration_to_month'].'-01',
            'specialization' => $params['specialization'],
            'role' => $params['role'],
            'industry' => $params['industry'],
            'position_level' => $params['position_level'],
            'salary' => $params['salary'],
            'description' => $params['description']
            );

        $this->db->insert($this->table, $insert);
    }
    
    public function update_experience($params){

        $update = array(
            'position_title' => $params['position_title'],
            'company_name' => $params['company_name'],
            'duration_from' => $params['duration_from_year'].'-'.$params['duration_from_month'].'-01',
            'duration_to' => $params['duration_to_year'].'-'.$params['duration_to_month'].'-01',
            'specialization' => $params['specialization'],
            'role' => $params['role'],
            'industry' => $params['industry'],
            'position_level' => $params['position_level'],
            'salary' => $params['salary'],
            'description' => $params['description']
            );

        $this->db->where('id', $params['experience_id']);
        $this->db->update($this->table, $update);

    }
    
    public function delete_experience($id){
        
        $this->db->query(" update $this->table set deleted = '1' where id = '".$id."' ");
    }

}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */