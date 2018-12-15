<?php

class Kelogistik_model extends CI_Model
{
    public function getAllKelogistik()
    {
        return $this->db->get('kelogistik')->result_array();
    }

    public function tambahDataKelogistik()
    {
        $data = [

            "nama_barang" => $this->input->post('nama-barang', true),
            "jenis_barang" => $this->input->post('jenis-barang', true),
            "stok_kebutuhan" => $this->input->post('stok-kebutuhan', true)

        ];

        $this->db->insert('kelogistik', $data);

    }


}
