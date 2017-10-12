<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
	
    var $table1 = 'jobs_users';
    var $table2 = 'users_info';
	
    public function __construct() {
        parent::__construct();
    }

    public function insert_client($params){

        $insert_user = array(
            'username' => $params['signemail'],
            'password' => $params['signpassword'],
            'email' => $params['signemail']
            );

        $this->db->insert($this->table1, $insert_user);
        $id = $this->db->insert_id();
        $app_id = 'AP'.date('y').'-'.str_pad($id, 5, '0', STR_PAD_LEFT);

        $insert_user_info = array(
            'id' => $id,
            'app_id' => $app_id,
            'fname' => $params['signfname'],
            'lname' => $params['signlname'],
            'email' => $params['signemail']
            );

        $this->db->insert($this->table2, $insert_user_info);

        return $id;

    }

    public function update_resume($resume_name, $resume_path, $resume_link){

        $update_info = array(
            'resume_name' => $resume_name,
            'resume_path' => $resume_path,
            'resume_link' => $resume_link,
            'uploaded_date' => date('Y-m-d H:i:s'),
            );

        $this->db->where('id', $this->session->userdata('user_id'));
        $this->db->update($this->table2, $update_info);
    }

    public function get_my_resume(){
        $query = $this->db->query(" select * from $this->table2 where id = '".$this->session->userdata('user_id')."'");
        if($query->num_rows() > 0){
            return $query->row_array();
        }
        else{
            return false;
        }
    }
    
    public function check_user_info($param){
        
        $query = $this->db->query(" select * from $this->table1 where username = '".$param['signemail']."' ");
        if($query->num_rows() > 0){
            return $query->row_array();
        }
        else{
            return false;
        }
    }
    
    public function get_user_info($param){
        
        $query = $this->db->query(" select * from $this->table1 a left join $this->table2 b on a.id=b.id where a.id = '".$param['user_id']."' ");
        if($query->num_rows() > 0){
            return $query->row_array();
        }
        else{
            return false;
        }
    }
    
    public function log_in($post){

        $query = $this->db->query(" select * from $this->table1 where username = '".$post['logusername']."'");
        if($query->num_rows() > 0){
            $rows = $query->row_array();
            if($rows['locked'] == 1){
                return array('success' => false, 'message' => 'Username is locked, please contact your administrator to reset your password.');
            }
            else{
                $query2 = $this->db->query(" select * from $this->table1 where username = '".$post['logusername']."' and password = '".$post['logpassword']."' ");
                if($query2->num_rows() > 0){
                    return array('success' => true, 'data' => $query->row_array());
                }
                else{
                    $attempts = $rows['attempts'] + 1;
                    $remaining = 3 - $attempts;
                    if($attempts < 3){
                        $this->db->query(" update $this->table1 set attempts = '".$attempts."' where username = '".$post['logusername']."'");
                        return array('success' => false, 'message' => 'Please check you username or password!\n You only have remaining '.$remaining.' of 3 attempts for this username and this account will be lockout!');
                    }
                    else{
                        $this->db->query(" update $this->table1 set attempts = '".$attempts."', locked = '1', log_time = now() where username = '".$post['logusername']."'");
                        return array('success' => false, 'message' => 'Account has been blocked! Please contact your administrator to reset your password.');
                    }
                }
            }
        }
        else{
            return array('success' => false, 'message' => 'Username does not exist!');
        }
    }

    public function delete_resume(){

        $update_info = array(
            'resume_name' => '',
            'resume_path' => '',
            'resume_link' => '',
            'uploaded_date' => '0000-00-00 00:00:00',
            );

        $this->db->where('id', $this->session->userdata('user_id'));
        $this->db->update($this->table2, $update_info);
    }
}

/* End of file roles_model.php */
/* Location: ./application/models/account/roles_model.php */