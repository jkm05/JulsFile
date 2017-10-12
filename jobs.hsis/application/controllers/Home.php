<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Home_model', 'home_model');
        $this->load->model('Specialization_model', 'specialization_model');
        $this->load->model('Primary_role_model', 'primary_role_model');
        $this->load->model('Industry_model', 'industry_model');
        $this->load->model('Position_level_model', 'position_level_model');
        $this->load->model('Experience_model', 'experience_model');
    }

    public function index()
    {
        if(!$this->session->userdata('user_id')){
            redirect('main');
        }

        $datus = array();
        $datus['menu'] = '';
        $data['template'] = 'view_home';
        $data['data'] = $datus;
        $data['js_file'] = '';
        $this->view_main($data);
    }

    public function experience(){
        if($this->input->post('save-experience')){
            $this->experience_model->save_experience($this->input->post());
        }
        
        if($this->input->post('update-experience')){
            $this->experience_model->update_experience($this->input->post());
            redirect('home/experience');
        }

        $specialization = $this->specialization_model->get_all_specialization();
        $primary_role = $this->primary_role_model->get_all_primary_role();
        $industry = $this->industry_model->get_all_industry();
        $position_level = $this->position_level_model->get_all_position_level();
        $position_level = $this->position_level_model->get_all_position_level();
        $experience = $this->experience_model->get_all_experience();

        $datus = array();
        $datus['menu'] = 'experience';
        $datus['specialization'] = $specialization;
        $datus['primary_role'] = $primary_role;
        $datus['industry'] = $industry;
        $datus['position_level'] = $position_level;
        $datus['experience'] = $experience;
        
        $data['template'] = 'view_experience';
        $data['data'] = $datus;
        $data['js_file'][] = 'experience';
        
        $this->view_main($data);
    }

    public function get_experience_info(){

        $id = $this->input->get('id');

        $experience = $this->experience_model->get_experience_info($id);

        echo json_encode(array('success' => TRUE, 'data' => $experience));
    }

    public function delete_experience(){
        $id = $this->input->post('id');

        $this->experience_model->delete_experience($id);

        echo json_encode(array('success' => TRUE));
    }

    public function education(){

        $datus = array();
        $datus['menu'] = 'education';
        $data['template'] = 'view_education';
        $data['data'] = $datus;
        $data['js_file'] = '';
        $this->view_main($data);
    }
    
    public function skills(){

        $datus = array();
        $datus['menu'] = 'skills';
        $data['template'] = 'view_skills';
        $data['data'] = $datus;
        $data['js_file'] = '';
        $this->view_main($data);
    }
    
    public function additional_info(){

        $datus = array();
        $datus['menu'] = 'additional_info';
        $data['template'] = 'view_additional_info';
        $data['data'] = $datus;
        $data['js_file'] = '';
        $this->view_main($data);
    }
    
    public function about_me(){

        $datus = array();
        $datus['menu'] = 'about_me';
        $data['template'] = 'view_about_me';
        $data['data'] = $datus;
        $data['js_file'] = '';
        $this->view_main($data);
    }
    
    public function upload_resume(){

        $datus = array();
        $datus['menu'] = 'upload_resume';
        $data['template'] = 'view_upload_resume';
        $data['data'] = $datus;
        $data['js_file'] = '';
        $this->view_main($data);
    }
    
    public function languages(){

        $datus = array();
        $datus['menu'] = 'languages';
        $data['template'] = 'view_languages';
        $data['data'] = $datus;
        $data['js_file'] = '';
        $this->view_main($data);
    }

    public function jobs(){

        $datus = array();
        $datus['menu'] = 'jobs';
        $data['template'] = 'view_jobs';
        $data['data'] = $datus;
        $data['js_file'] = '';
        $this->view_main($data);
    }

    public function login(){
        $post = $this->input->post();
        $user_info = $this->home_model->log_in($post);

        if($user_info['success']){
                $this->session->set_userdata('username', $user_info['data']['email']);
                $this->session->set_userdata('user_id', $user_info['data']['id']);
                echo json_encode($user_info);
        }
        else{
                echo json_encode($user_info);
        }
    }

    public function signup(){
		
        $post = $this->input->post();
        $check_exist = $this->home_model->check_user_info($post);
        if($check_exist){
            echo json_encode(array('success' => FALSE, 'message' => 'Email already exist!'));
        }
        else{
            $id = $this->home_model->insert_client($post);

            $this->session->set_userdata('username', $post['signemail']);
            $this->session->set_userdata('user_id', $id);

            echo json_encode(array('success' => TRUE));
        }
    }

    public function resume(){

    	if($this->input->post('submit-form')){

    		$upload_path = $_SERVER['DOCUMENT_ROOT'].'/bcc/jobs.bcc/uploads';
        	$link_path = base_url('uploads/');

			$name       = $_FILES['my_resume']['name'];
	        $type       = $_FILES['my_resume']['type'];
	        $size       = $_FILES['my_resume']['size'];
	        $tmp_name   = $_FILES['my_resume']['tmp_name'];
	        $error      = $_FILES['my_resume']['error'];
	        $nname      = $upload_path.'/'.$name;

	        // if($error == 0 && $size > 2097152){

	        //     return array('error' => 'Upload Maximum of 2MB');
	        // }
	        // if(is_array($validation) && count($validation) > 0){
	        //     if(isset($validation['type'])){
	        //         if(!in_array($type, $validation['type'])){
	        //             $ntype = implode(', ', $validation['type']);
	        //             return array('error' => 'Please upload ('.$ntype.') type only');
	        //         }
	        //     }
	        // }
	        
	        $link = $link_path.'/'.$name;
	        move_uploaded_file($tmp_name, $nname);

	        $this->home_model->update_resume($name, $nname, $link);
    	}

    	$data['resume'] = $this->home_model->get_my_resume();
    	$this->load->view('view_resume', $data);
    }

    public function dl_resume(){

    	$resume = $this->home_model->get_my_resume();

	    if (file_exists($resume['resume_path'])) {
	        header('Content-Description: File Transfer');
	        header('Content-Type: application/octet-stream');
	        header('Content-Disposition: attachment; filename='.basename($resume['resume_name']));
	        header('Expires: 0');
	        header('Cache-Control: must-revalidate');
	        header('Pragma: public');
	        header('Content-Length: ' . filesize($resume['resume_path']));
	        readfile($resume['resume_path']);
	        exit;
    	}
    }

    public function logout(){

//    	$this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
    	redirect('main');
    }
}