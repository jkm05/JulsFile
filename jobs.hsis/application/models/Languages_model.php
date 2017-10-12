<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Languages_model extends CI_Model {
    
    var $table = 'languages';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_languages(){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and deleted != '1' ");
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

    public function get_languages_info($id){

        $query = $this->db->query(" select * from $this->table where user_id = '".$this->session->userdata('user_id')."' and id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

    public function save_languages($params){

        $insert = array();
        foreach ($params['language_id'] as $nkey1 => $val){
            if($val == ''){
                $insert[] = array(
                    'user_id' => $this->session->userdata('user_id'),
                    'name' => $params['language'][$nkey1],
                    'spoken' => $params['spoken'][$nkey1],
                    'written' => $params['written'][$nkey1],
                    );
            }
            else{
                $update = array(
                    'user_id' => $this->session->userdata('user_id'),
                    'name' => $params['language'][$nkey1],
                    'spoken' => $params['spoken'][$nkey1],
                    'written' => $params['written'][$nkey1],
                );

                $this->db->where('id', $val);
                $this->db->update($this->table, $update);
            }
        }

        if(count($insert) > 0){
            $this->db->insert_batch($this->table, $insert);
        }
    }
    
    public function delete_languages($id){
        
        $this->db->query(" update $this->table set deleted ='1' where id = '".$id."' ");
    }

}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */