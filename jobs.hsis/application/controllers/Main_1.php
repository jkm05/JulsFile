<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
                if($this->session->userdata('user_id')){
                    redirect('main');
                }
	}

	public function index()
	{
		$this->load->view('view_main');
                
	}
}