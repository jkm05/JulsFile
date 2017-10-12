<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_resume extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Home_model', 'home_model');
    }

    public function index()
    {
        $this->upload_resume();
    }

    public function upload_resume(){

        if($this->input->post('upload_resume')){
            $return = $this->move_resume();
            $this->home_model->update_resume($return[0], $return[1], $return[2]);
        }

        if($this->input->post('delete_resume')){
            $this->delete_resume();
        }

        $upload_resume = $this->home_model->get_my_resume();

        $datus = array();
        $datus['menu'] = 'upload_resume';
        $datus['upload_resume'] = $upload_resume;
        
        $data['template'] = 'view_upload_resume';
        $data['data'] = $datus;
        $data['js_file'][] = 'upload_resume';
        
        $this->view_main($data);
    }
    
    public function edit_skills(){
        if($this->input->post('save-skills')){
            $this->skills_model->save_skills($this->input->post());
            
            redirect('skills');
        }

        $skills = $this->skills_model->get_all_skills();

        $datus = array();
        $datus['menu'] = 'skills';
        $datus['skills'] = $skills;
        
        $data['template'] = 'edit_skills';
        $data['data'] = $datus;
        $data['js_file'][] = 'skills';
        
        $this->view_main($data);
    }

    public function get_skills_info(){

        $id = $this->input->get('id');

        $education = $this->skills_model->get_skills_info($id);

        echo json_encode(array('success' => TRUE, 'data' => $education));
    }

    public function delete_resume(){

        $this->home_model->delete_resume();

    }

    private function move_resume(){

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

        return array($name, $nname, $link);

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
}