<?php

class Barang_model extends CI_model
{

    public function getAllBarang()
    {
        $query = $this->db->query("SELECT * FROM barang ORDER BY id_barang DESC")->result_array();
        return $query;
    }

    public function tambahDataBarang()
    {
        $data = [

            "nama_donatur" => $this->input->post('nama-donatur', true),
            "program_donasi" => $this->input->post('program-donasi', true),
            "bentuk_donasi" => $this->input->post('bentuk-donasi', true),
            "nama_barang" => $this->input->post('nama-barang', true),
            "jumlah_barang" => $this->input->post('jumlah-barang', true),
            "status" => $this->input->post('status', true)

        ];

        $this->db->insert('barang', $data);
    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_donatur', $keyword);
        $this->db->or_like('program_donasi', $keyword);
        $this->db->or_like('bentuk_donasi', $keyword);
        $this->db->or_like('nama_barang', $keyword);
        $this->db->or_like('jumlah_barang', $keyword);
        $this->db->or_like('status', $keyword);
        return $this->db->get('barang')->result_array();
    }
}