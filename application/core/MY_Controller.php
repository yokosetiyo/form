<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "telah_login") {
            redirect(base_url('login'));
        }
        $this->id_user = $this->session->userdata('id_user');
        $this->role_user = $this->session->userdata('role_user');
    }

    protected function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = ($this->input->post($field, TRUE) == "") ? null : $this->input->post($field, TRUE);
        }
        return $data;
    }
}