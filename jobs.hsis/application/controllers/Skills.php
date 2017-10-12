<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skills extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Skills_model', 'skills_model');
    }

    public function index()
    {
        $this->skills();
    }

    public function skills(){

        $skills = $this->skills_model->get_all_skills();
        $nskills['advanced'] = array();
        $nskills['intermediate'] = array();
        $nskills['beginner'] = array();
        
        foreach($skills as $nkey1 => $val){
            $nskills[$val['proficiency']][] = $val;
        }

        $datus = array();
        $datus['menu'] = 'skills';
        $datus['skills'] = $nskills;
        
        $data['template'] = 'view_skills';
        $data['data'] = $datus;
        $data['js_file'][] = 'skills';
        
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

    public function delete_skills(){
        $id = $this->input->post('id');

        $this->skills_model->delete_skills($id);

        echo json_encode(array('success' => TRUE));
    }
}