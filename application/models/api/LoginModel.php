<?php

class LoginModel extends CI_Model {
    
    public function get_where($where,$table){
	    return $this->db->get_where($table,$where);
	}

	public function checkUsernamePassword($username,$password) {
        $cek_username = $this->db->where([
            'username' => $username,
            'deleted_at' => NULL
        ])->get('user')->num_rows();

        if($cek_username > 0) {
            $cek_password = $this->db->where([
                'username' => $username,
                'password' => md5($password)
            ])->get('user')->row_array();

            if($cek_password) {
                return $data = [
                    'status' => true,
                    'data' => $cek_password,
                    'message' => 'Data ditemukan'
                ];
            } else {
                return $data = [
                    'status' => false,
                    'data' => '', 
                    'message' =>'Password salah.'
                ];
            }
        } else {
            return $data = [
                'status' => false,
                'data' => '', 
                'message' =>'Username salah atau tidak ditemukan.'
            ];
        }
    }
}