<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Specialization_model extends CI_Model {
	
    var $table = 'specialization';
	
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_specialization(){

        $query = $this->db->query(" select * from $this->table where deleted != '1' ");
        return $query->result_array();
    }
    
    public function get_specialization_info($id){

        $query = $this->db->query(" select * from $this->table where id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */