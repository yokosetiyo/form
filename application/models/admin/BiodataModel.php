<?php

use GuzzleHttp\Client;

class BiodataModel extends CI_Model {
    private $_client;

    //set nama tabel yang akan kita tampilkan datanya
    var $table = 'biodata';
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(null, 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'no_hp', 'email', 'jurusan', 'pendidikan', 'alamat');

    var $column_search = array('nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'no_hp', 'email', 'jurusan', 'pendidikan', 'alamat');
    // default order 
    var $order = array('id_biodata' => 'asc');

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://setiyo.test/form/api/',
            'auth' => ['admin', '1234']
 
        ]);
    }

    public function semuaBiodata()
    {
        $response = $this->_client->request('GET', 'biodata', [
            'query' => [
                // 'wpu-key' => 'rahasia'
            ]
        ]);
 
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function BiodataDariId($id)
    {
 
        $response = $this->_client->request('GET', 'biodata', [
            // Params
            'query' => [
                // 'wpu-key' => 'rahasia',
                'id' => $id
            ]
        ]);
 
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahBiodata()
    {
        $data = $_POST;
        $response = $this->_client->request('POST', 'biodata', [
            'form_params' => $data
        ]);
 
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahBiodata()
    {
        $data = $_POST;
        // $data = [
        //     "id" => $this->input->post('id', true)
        // ];
 
        $response = $this->_client->request('PUT', 'biodata', [
            'form_params' => $data
        ]);
 
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusBiodata($id)
    {
        $response = $this->_client->request('DELETE', 'biodata', [
            'form_params' => [
                'id' => $id,
                // 'wpu-key' => 'rahasia'
            ]
        ]);
 
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    //DATATABLES
    private function _get_datatables_query()
    {
        $this->db->from($this->table)->where('deleted_at',null);
        $i = 0;
        foreach ($this->column_search as $item) // loop kolom 
        {
            if ($this->input->post('search')['value']) // jika datatable mengirim POST untuk search
            {
                if ($i === 0) // looping pertama
                {
                    $this->db->group_start();
                    $this->db->like($item, $this->input->post('search')['value']);
                } else {
                    $this->db->or_like($item, $this->input->post('search')['value']);
                }
                if (count($this->column_search) - 1 == $i) //looping terakhir
                    $this->db->group_end();
            }
            $i++;
        }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $this->db->order_by($this->column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}