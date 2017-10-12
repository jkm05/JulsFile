<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Industry_model extends CI_Model {
	
    var $table = 'industry';
	
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_industry(){

        $query = $this->db->query(" select * from $this->table where deleted != '1' ");
        return $query->result_array();
    }
    
    public function get_industry_info($id){

        $query = $this->db->query(" select * from $this->table where id = '".$id."' and deleted != '1' ");
        return $query->row_array();
    }

}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */