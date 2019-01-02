<?php

class Posko_model extends CI_Model{

    public function getAllPosko()
    {
        $query = $this->db->query("SELECT * FROM posko ORDER BY id_posko DESC")->result_array();
        return $query;
    }

    public function tablePosko($limit, $start)
    {
        $query = $this->db->get('posko', $limit, $start);
        return $query;
    }

    public function getPoskoById($id)
    {
        return $this->db->get_where('posko', ['id_posko' => $id])->row_array();
    }

    public function getTotalPosko()
    {
        $this->db->select('COUNT(nama_posko) as total');
        $this->db->from('posko');
        return $this->db->get()->row()->total; 
    }

    public function hapusDataPosko($id)
    {
        $this->db->delete('posko', array('id_posko' => $id));
    }

    public function editDataPosko($id)
    {
        $data = [

            "nama_posko" => $this->input->post('nama-posko', true)

        ];

        $this->db->where('id_posko', $id);
        $this->db->update('posko', $data);

    }

    public function tambahDataPosko()
    {
        $data = [

            "nama_posko" => $this->input->post('nama-posko', true)

        ];
  
        $this->db->insert('posko', $data);

    }

    public function cariDataPosko()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_posko', $keyword);
        return $this->db->get('posko');
    }
}