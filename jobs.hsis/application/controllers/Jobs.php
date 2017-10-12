<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Jobs_model', 'jobs_model');
    }

    public function index()
    {
        $this->jobs();
    }

    public function jobs(){
        $search_jobs = $this->input->get('search_jobs');
        if($search_jobs){
            
        }
        else {
            $search = '';
        }

        $jobs = $this->jobs_model->get_all_jobs($search_jobs);
        $datus = array();
        $datus['menu'] = 'jobs';
        $datus['jobs'] = $jobs;
        $datus['search_jobs'] = $search_jobs;

        $data['template'] = 'view_jobs';
        $data['data'] = $datus;
        $data['js_file'][] = 'jobs';

        $this->view_main($data);
    }

    public function apply_jobs(){

        $id = $this->input->get('id');

        if($this->input->post('apply_jobs')){
            $this->jobs_model->apply_jobs($id);
        }

        $jobs_info = $this->jobs_model->get_jobs_info($id);
        $jobs_application = $this->jobs_model->get_jobs_application($id);

        $datus = array();
        $datus['id'] = $id;
        $datus['menu'] = 'jobs';
        $datus['jobs_info'] = $jobs_info;
        $datus['jobs_application'] = $jobs_application;

        $data['template'] = 'view_apply_jobs';
        $data['data'] = $datus;
        $data['js_file'][] = 'jobs';
        
        $this->view_main($data);
    }

    public function get_jobs_info(){

        $id = $this->input->get('id');

        $education = $this->jobs_model->get_jobs_info($id);

        echo json_encode(array('success' => TRUE, 'data' => $jobs));
    }
    
    public function check_jobs(){

        $id = $this->input->get('id');

        $check_jobs = $this->jobs_model->check_jobs($id);
        
        if($check_jobs['success']){
            echo json_encode(array('success' => $check_jobs['success']));
        }
        else{
            echo json_encode(array('success' => $check_jobs['success'], 'message' => $check_jobs['message']));
        }
    }

    public function delete_jobs(){
        $id = $this->input->post('id');

        $this->jobs_model->delete_jobs($id);

        echo json_encode(array('success' => TRUE));
    }
}