<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

    public function index()
    {
        $data = array();
        
        $view['title'] = 'Dashboard';
        $view['sub_title'] = 'Dashboard';
        $view['content'] = 'admin/dashboard/index';
        $view['css'] = 'admin/dashboard/css';
        $view['js'] = 'admin/dashboard/js';
        $this->template->display($view, $data);
    }

    public function logout()
    {
		$this->session->sess_destroy();
		$this->session->set_flashdata('alert', 'logout');
		redirect(base_url('login'));
	}
}