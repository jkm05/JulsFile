<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additional_info extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Education_model', 'education_model');
    }

    public function index()
    {
        $this->education();
    }

    public function education(){
        if($this->input->post('save-education')){
            $this->education_model->save_education($this->input->post());
        }
        
        if($this->input->post('update-education')){
            $this->education_model->update_education($this->input->post());
            redirect('education');
        }

        $education = $this->education_model->get_all_education();
        $qualification = $this->education_model->get_all_qualification();
        $fielofstudy = $this->education_model->get_all_fielofstudy();

        $datus = array();
        $datus['menu'] = 'education';
        $datus['education'] = $education;
        $datus['qualification'] = $qualification;
        $datus['fielofstudy'] = $fielofstudy;
        
        $data['template'] = 'view_education';
        $data['data'] = $datus;
        $data['js_file'][] = 'education';
        
        $this->view_main($data);
    }

    public function get_education_info(){

        $id = $this->input->get('id');

        $education = $this->education_model->get_education_info($id);

        echo json_encode(array('success' => TRUE, 'data' => $education));
    }

    public function delete_education(){
        $id = $this->input->post('id');

        $this->education_model->delete_education($id);

        echo json_encode(array('success' => TRUE));
    }
}