<?php

class Kelogistik_model extends CI_Model
{
    public function getAllKelogistik()
    {
        $query = $this->db->query("SELECT * FROM kelogistik ORDER BY id_logistik DESC")->result_array();
        return $query;
    }

    public function tambahDataKelogistik()
    {
        $data = [

            "nama_program" => $this->input->post('nama-program', true),
            "nama_barang" => $this->input->post('nama-barang', true),
            "jenis_barang" => $this->input->post('jenis-barang', true),
            "stok_kebutuhan" => $this->input->post('stok-kebutuhan', true)

        ];

        $this->db->insert('kelogistik', $data);

    }

    public function hapusDataKelogistik($id)
    {
        $this->db->delete('kelogistik', array('id_logistik' => $id));
    }


    public function cariDataKelogistik()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('jenis_barang', $keyword);
        $this->db->or_like('stok_kebutuhan', $keyword);
        return $this->db->get('kelogistik')->result_array();
    }

}
