<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs_model extends CI_Model {
	
    var $table = 'job';
    var $table2 = 'job_application';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_jobs($search){

        $query = $this->db->query(" select * from $this->table where deleted != '1' ".($search != '' ? " and job_title like '%".$search."%' " : '')." ");
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    public function get_jobs_info($id){

        $query = $this->db->query(" select * from $this->table where id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }
    
    public function get_jobs_application($id){

        $query = $this->db->query(" select * from $this->table2 where job_id = '".$id."' and deleted != '1' and user_id = '".$this->session->userdata('user_id')."' ");
        if($query->num_rows()){
            return $query->row_array();
        }
        else{
            return false;
        }
    }

    public function save_jobs($params){

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
    
    public function update_jobs($params){

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
    
    public function delete_jobs($id){
        
        $this->db->query(" update $this->table set deleted ='1' where id = '".$id."' ");
    }

    public function apply_jobs($id){
        
        $insert = array(
            'user_id' => $this->session->userdata('user_id'),
            'job_id' => $id,
            'application_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert($this->table2, $insert);
    }
    
    public function check_jobs($id){
        
//        $query = $this->db->query(" select * from job_application where job_id = '".$id."' and user_id = '".$this->session->userdata('user_id')."' ");
        $query = $this->db->query(" select * from job_application where user_id = '".$this->session->userdata('user_id')."' and status != 'reject' ");
        if($query->num_rows() > 0){
            return array('success' => FALSE, 'message' => 'You Still have a Pending Application');
        }
        else{
            
            $query = $this->db->query(" select to_days(now()) - to_days(application_date) as dtval from job_application where user_id = '".$this->session->userdata('user_id')."' and status = 'reject' order by id desc limit 1 ");
            if($query->num_rows() > 0){
                $row = $query->row_array();
                if($row['dtval'] < 31){
                    return array('success' => FALSE, 'message' => 'You Can Apply after a 30 days notice');
                }
                else{
                    return array('success' => TRUE);
                }
            }
            else{
                return array('success' => TRUE);
            }
        }
    }
}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */