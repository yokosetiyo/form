<?php defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Login extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/LoginModel', 'login');
    }

    public function index_post()
    {
        $username = $this->post('username');
        $password = $this->post('password');

        if ($username === NULL || $password === NULL)
        {
            $this->response([
                'status' => false,
                'message' => 'Username atau Password tidak boleh kosong'
            ],200);
        }
        else
        {
            $check = $this->login->checkUsernamePassword($username,$password);

            if($check['status'] == TRUE)
            {
                $this->response($check,200);
            }
            else
            {
                $this->response( [
                    'status' => false,
                    'message' => $check['message']
                ], 200 );
            }
        }
    }
}