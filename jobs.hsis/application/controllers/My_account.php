<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_account extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('My_account_model', 'my_account_model');
    }

    public function index()
    {
        $this->my_account();
    }

    public function my_account(){

        $user_info = $this->my_account_model->user_info();
        $datus = array();
        $datus['menu'] = 'my_account';

        $data['template'] = 'view_my_account';
        $data['data'] = $user_info;
        $data['js_file'][] = 'my_account';

        $this->view_main($data);
    }

    public function edit(){

        if($this->input->post('save')){
            $pic = $this->move_pic();
            $this->my_account_model->save_info($this->input->post(), $pic);
            redirect('my_account');
        }
        
        $user_info = $this->my_account_model->user_info();
        $datus = array();
        $datus['menu'] = 'my_account';

        $data['template'] = 'view_my_account_edit';
        $data['data'] = $user_info;
        $data['js_file'][] = 'my_account_edit';

        $this->view_main($data);
    }
    
    private function move_pic(){

        $upload_path = $_SERVER['DOCUMENT_ROOT'].'/hsis/jobs.hsis/uploads';
        $link_path = base_url('uploads/');

        $name       = $_FILES['profile_pic']['name'];
        $type       = $_FILES['profile_pic']['type'];
        $size       = $_FILES['profile_pic']['size'];
        $tmp_name   = $_FILES['profile_pic']['tmp_name'];
        $error      = $_FILES['profile_pic']['error'];
        $nname      = $upload_path.'/'.$name;

        if($error != 4){
            $link = $link_path.'/'.$name;
            move_uploaded_file($tmp_name, $nname);

            return array($name, $nname, $link);
        }
        else{
            return false;
        }

    }
}