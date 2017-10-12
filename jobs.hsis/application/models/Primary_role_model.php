<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Primary_role_model extends CI_Model {
	
    var $table = 'primary_role';
	
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_primary_role(){

        $query = $this->db->query(" select * from $this->table where deleted != '1' ");
        return $query->result_array();
    }
    
    public function get_primary_role_info($id){

        $query = $this->db->query(" select * from $this->table where id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

    public function get_primary_role_by_specialization($id){

        $query = $this->db->query(" select * from $this->table where specialization_id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */