<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Additional_info_model extends CI_Model {

    var $table = 'education';

    public function __construct() {
        parent::__construct();
    }

    public function get_all_education(){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and deleted != '1' ");
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    public function get_education_info($id){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

    public function save_education($params){

        $insert = array(
            'user_id' => $this->session->userdata('user_id'),
            'university' => $params['university'],
            'grad_date' => $params['grad_date_year'].'-'.$params['grad_date_month'].'-01',
            'qualification' => $params['qualification'],
            'field_of_study' => $params['field_of_study'],
            'major' => $params['major'],
            'grade' => $params['grade'],
            'additional_info' => $params['additional_info']
            );

        $this->db->insert($this->table, $insert);
    }
    
    public function update_education($params){

        $update = array(
            'university' => $params['university'],
            'grad_date' => $params['grad_date_year'].'-'.$params['grad_date_month'].'-01',
            'qualification' => $params['qualification'],
            'field_of_study' => $params['field_of_study'],
            'major' => $params['major'],
            'grade' => $params['grade'],
            'additional_info' => $params['additional_info']
            );

        $this->db->where('id', $params['education_id']);
        $this->db->update($this->table, $update);

    }
    
    public function delete_education($id){
        
        $this->db->query(" update $this->table set deleted ='1' where id = '".$id."' ");
    }

    public function get_all_qualification(){
        $query = $this->db->query(" select * from $this->table2 where deleted != '1' ");
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    public function get_qualification_info($id){

        $query = $this->db->query(" select * from $this->table2 where id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

    public function get_all_fielofstudy(){
        $query = $this->db->query(" select * from $this->table3 where deleted != '1' ");
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    public function get_fielofstudy_info($id){

        $query = $this->db->query(" select * from $this->table3 where id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }
}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */