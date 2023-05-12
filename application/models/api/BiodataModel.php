<?php

class BiodataModel extends CI_Model {

    public function getBiodata($id = null)
    {
        if ($id === null) {
            return $this->db->get_where('biodata', [
                'deleted_at' => NULL
            ])->result_array();
        } else {
            return $this->db->get_where('biodata', [
                'id_biodata' => $id,
                'deleted_at' => NULL
            ])->row_array();
        }
    }

    public function createBiodata($data)
    {
        $this->db->insert('biodata', $data);
        return $this->db->affected_rows();
    }

    public function updateBiodata($data, $id)
    {
        $this->db->update('biodata', $data, ['id_biodata' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteBiodata($id)
    {
        $this->db->update('biodata',['deleted_at' => date('Y-m-d H:i:s')],['id_biodata' => $id]);
        return $this->db->affected_rows();
    }
}