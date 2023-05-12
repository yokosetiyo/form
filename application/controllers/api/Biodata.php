<?php defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Biodata extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/BiodataModel', 'model');
    }

    public function index_get()
 
    {
        $id = $this->get('id');
 
        if ($id === null) {
            $biodata = $this->model->getBiodata();
        } else {
            $biodata = $this->model->getBiodata($id);
        }
 
        if ($biodata) {
            $this->response([
                'status' => true,
                'data' => $biodata,
                'message' => 'Berhasil ambil data'
            ], RestController::HTTP_OK);
        } elseif(empty($biodata)) {
            $this->response([
                'status' => false,
                'data' => '',
                'message' => 'Data biodata kosong'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'data' => '',
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function index_post()
    {
        $data = [
            'nama' => $this->post('nama'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'tempat_lahir' => $this->post('tempat_lahir'),
            'tanggal_lahir' => $this->post('tanggal_lahir'),
            'no_hp' => $this->post('no_hp'),
            'email' => $this->post('email'),
            'pendidikan' => $this->post('pendidikan'),
            'jurusan' => $this->post('jurusan'),
            'alamat' => $this->post('alamat'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        if ($this->model->createBiodata($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil di simpan!.'
            ],RestController::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal menyimpan data!.'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id_biodata');
        $data = [
            'nama' => $this->put('nama'),
            'jenis_kelamin' => $this->put('jenis_kelamin'),
            'tempat_lahir' => $this->put('tempat_lahir'),
            'tanggal_lahir' => $this->put('tanggal_lahir'),
            'no_hp' => $this->put('no_hp'),
            'email' => $this->put('email'),
            'pendidikan' => $this->put('pendidikan'),
            'jurusan' => $this->put('jurusan'),
            'alamat' => $this->put('alamat'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        if ($this->model->updateBiodata($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil di ubah!.'
            ],RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal mengubah data!.'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
 
        if ($id == null) {
            $this->response([
                'status' => false,
                'message' => 'profide an id!'
            ], RestController::HTTP_BAD_REQUEST);
        } else {
            if ($this->model->deleteBiodata($id) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'data' => $id,  
                    'message' => 'deleted.'
                ], RestController::HTTP_OK);
            } else {
                // id not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], RestController::HTTP_BAD_REQUEST);
            }
        }
    }
}