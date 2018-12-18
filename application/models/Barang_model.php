<?php

class Barang_model extends CI_model
{
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
}