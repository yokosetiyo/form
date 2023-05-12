<?php

use GuzzleHttp\Client;

class LoginModel extends CI_Model {
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://setiyo.test/form/api/',
            'auth' => ['admin', '1234']
 
        ]);
    }

    public function getLogin($username,$password) {
        $response = $this->_client->request('POST', 'login', [
            // Params
            'form_params' => [
                // 'wpu-key' => 'rahasia',
                'username' => $username,
                'password' => $password
            ]
        ]);
 
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}