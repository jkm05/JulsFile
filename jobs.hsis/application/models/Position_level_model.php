<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Position_level_model extends CI_Model {
	
    var $table = 'position_level';
	
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_position_level(){

        $query = $this->db->query(" select * from $this->table where deleted != '1' ");
        return $query->result_array();
    }
    
    public function get_position_level_info($id){

        $query = $this->db->query(" select * from $this->table where id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */