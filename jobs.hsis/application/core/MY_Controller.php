<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class MY_Controller extends CI_Controller{
	
    function __construct(){
        parent::__construct();

        $this->load->model('Home_model', 'home_model');
    }

    public function view_main($params){
        
        $user_info = $this->get_user_info();
        $params['user_info'] = $user_info;
        $this->load->view('main_template', $params);
    }

    private function get_user_info(){
        
        $param['user_id'] = $this->session->userdata('user_id');
        $user_info = $this->home_model->get_user_info($param);
        return $user_info;
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */