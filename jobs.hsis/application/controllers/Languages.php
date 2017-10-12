<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Languages extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Languages_model', 'languages_model');
    }

    public function index()
    {
        $this->languages();
    }

    public function languages(){

        $languages = $this->languages_model->get_all_languages();

        $datus = array();
        $datus['menu'] = 'languages';
        $datus['languages'] = $languages;
        
        $data['template'] = 'view_languages';
        $data['data'] = $datus;
        $data['js_file'][] = 'languages';
        
        $this->view_main($data);
    }
    
    public function edit_languages(){
        if($this->input->post('save-languages')){
            $this->languages_model->save_languages($this->input->post());
            
            redirect('languages');
        }

        $languages = $this->languages_model->get_all_languages();

        $datus = array();
        $datus['menu'] = 'languages';
        $datus['languages'] = $languages;
        
        $data['template'] = 'edit_languages';
        $data['data'] = $datus;
        $data['js_file'][] = 'languages';
        
        $this->view_main($data);
    }

    public function get_languages_info(){

        $id = $this->input->get('id');

        $education = $this->skills_model->get_skills_info($id);

        echo json_encode(array('success' => TRUE, 'data' => $education));
    }

    public function delete_languages(){
        $id = $this->input->post('id');

        $this->languages_model->delete_languages($id);

        echo json_encode(array('success' => TRUE));
    }
}