<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification_model extends CI_Model {
	
    var $table = 'notification';
	
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_notification(){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and deleted != '1' ");
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    public function get_notification_info($id){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

    public function delete_notification($id){
        
        $this->db->query(" update $this->table set deleted ='1' where id = '".$id."' ");
    }
    
    public function get_job_info($user_id, $job_id){

        $query = $this->db->query(" select * from job_application where user_id = '".$user_id."' and job_id = '".$job_id."' ");
        return $query->row_array();
    }
    
    public function confirm_notification($id){
        
        $info = $this->get_notification_info($id);
        $this->db->query(" update job_application set app_con ='confirm' where user_id = '".$info['user_id']."' and job_id = '".$info['job_id']."' ");
    }
    
    public function cancel_notification($id){
        
        $info = $this->get_notification_info($id);
        $this->db->query(" update job_application set app_con ='cancel' where user_id = '".$info['user_id']."' and job_id = '".$info['job_id']."' ");
    }
}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */