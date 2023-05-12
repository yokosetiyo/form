<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('LoginModel','auth');
		if (!empty($this->session->userdata('status'))) {
			redirect(base_url($this->session->userdata('role_user').'/dashboard'));
		}
    }

    public function index()
	{
		$this->load->view('login');
	}

    public function aksi()
    {
		$username = $this->input->post('username',true);
        $password = $this->input->post('password',true);

		$data = $this->auth->getLogin($username,$password);

		if($data['status'] === true) {
			$row = $data['data'];
			$data_session = array(
				'id_user' => $row['id_user'],
				'username_user' => $row['username'],
				'nama_user' => $row['nama'],
				'role_user' => $row['role'],
				'status' => 'telah_login',
			);

			$this->session->set_userdata($data_session);

			$result = [
				'status' => true,
				'message' => 'Berhasil login',
				'url' => base_url($row['role'].'/dashboard')
			];
			echo json_encode($result);
		} else {
			echo json_encode($data);
		}

        // $this->form_validation->set_rules('username', 'username', 'required');
		// $this->form_validation->set_rules('password', 'password', 'required');

		// if($this->form_validation->run() != false) {
		// 	$username = $this->input->post('username');
		// 	$password = $this->input->post('password');
		// 	$where = array(
		// 		'username' => $username,
		// 		'deleted_at' => NULL
		// 	);

		// 	$this->session->set_flashdata('username', $username);
		// 	$cek = $this->LoginModel->get_where($where, 'user')->num_rows();

		// 	if($cek > 0) {
		// 		$where2 = array(
		// 			'username' => $username,
		// 			'password' => md5($password)
		// 		);
		// 		$cek2 = $this->LoginModel->get_where($where2, 'user')->num_rows();

		// 		if($cek2 > 0) {
		// 			$data = $this->LoginModel->get_where($where, 'user')->row();

		// 			$data_session = array(
		// 				'id_user' => $data->id,
		// 				'username_user' => $data->username,
		// 				'nama_user' => $data->nama,
		// 				'role_user' => $data->role
		// 			);
		// 			$this->session->set_userdata($data_session);

		// 			redirect(base_url($data->role.'/dashboard'));
		// 		} else {
		// 			$this->session->set_flashdata('alert', 'gagal');
		// 			redirect(base_url('login'));
		// 		}
		// 	} else {
		// 		$this->session->set_flashdata('alert', 'gagal');
		// 		redirect(base_url('login'));
		// 	}
		// } else {
		// 	$this->load->view('login');
		// }
    }
}