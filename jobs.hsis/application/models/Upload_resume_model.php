<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_resume_model extends CI_Model {
	
    var $table = 'skills';
	
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_skills(){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and deleted != '1' ");
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    public function get_skills_info($id){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

    public function save_skills($params){

        $insert = array();
        foreach ($params['skill_id'] as $nkey1 => $val){
            if($val == ''){
                $insert[] = array(
                    'user_id' => $this->session->userdata('user_id'),
                    'name' => $params['skill'][$nkey1],
                    'proficiency' => $params['proficiency'][$nkey1],
                    );
            }
            else{
                $update = array(
                    'name' => $params['skill'][$nkey1],
                    'proficiency' => $params['proficiency'][$nkey1],
                );

                $this->db->where('id', $val);
                $this->db->update($this->table, $update);
            }
        }

        if(count($insert) > 0){
            $this->db->insert_batch($this->table, $insert);
        }
    }
    
    public function delete_skills($id){
        
        $this->db->query(" update $this->table set deleted ='1' where id = '".$id."' ");
    }

}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */