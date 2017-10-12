<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Notification_model', 'notification_model');
    }

    public function index()
    {
        $this->notification();
    }

    public function notification(){
        
        $notification = $this->notification_model->get_all_notification();

        $datus = array();
        $datus['menu'] = 'notification';
        $datus['notification'] = $notification;
        
        $data['template'] = 'view_notification';
        $data['data'] = $datus;
        $data['js_file'][] = 'notification';

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
    
    public function confirm(){
        
        $id = $this->input->get('id');
        $this->notification_model->confirm_notification($id);
        redirect('notification');
    }

    public function cancel(){
        
        $id = $this->input->get('id');
        $this->notification_model->cancel_notification($id);
        redirect('notification');
    }
}