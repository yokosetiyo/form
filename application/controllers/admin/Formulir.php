<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Formulir extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/BiodataModel','model');
	}

    public function index()
    {
        $data = array(
            // 'data' => $this->model->SemuaBiodata()
        );
        
        $view['title'] = 'Formulir';
        $view['sub_title'] = 'Pengisian Formulir';
        $view['content'] = 'admin/formulir/index';
        $view['css'] = 'admin/formulir/index_css';
        $view['js'] = 'admin/formulir/index_js';
        $this->template->display($view, $data);
    }

    public function simpan()
    {
        $data = $_POST;
        if($data['id_biodata'] == NULL || $data['id_biodata'] == '') {
            $result = $this->model->tambahBiodata($data);
        } else {
            $result = $this->model->ubahBiodata($data);
        }
        echo json_encode($result);
    }

    public function ambildata()
    {
        $id = $this->input->get('id',true);
        $result = $this->model->BiodataDariId($id);
        echo json_encode($result);
    }

    public function hapus()
    {
        $id = $this->input->get('id',true);
        $result = $this->model->hapusBiodata($id);
        echo json_encode($result);
    }

    public function data()
    {
        header('Content-Type: application/json');
        $list = $this->model->get_datatables();
        $data = array();
        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $kolom) {
            $no++;
            $row = array();
            $row[] = $no;
            //row pertama akan kita gunakan untuk btn edit dan delete
            
            $row[] = $kolom->nama;
            $row[] = $kolom->jenis_kelamin == 'L' ? 'Laki-Laki':'Perempuan';
            $row[] = $kolom->tempat_lahir.', '.$kolom->tanggal_lahir;
            $row[] = $kolom->no_hp.'<br>'.$kolom->email;
            $row[] = $kolom->pendidikan.'<br>'.$kolom->jurusan;
            // $row[] = $kolom->alamat;
            $row[] =  '<btn class="btn btn-success" onclick="ambildata('.$kolom->id_biodata.')"><i class="fa fa-edit"></i></btn>
            <btn class="btn btn-danger" onclick="hapus('.$kolom->id_biodata.')"><i class="fa fa-trash"></i> </btn>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->model->count_all(),
            "recordsFiltered" => $this->model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    }
}