<?php

class Petugas_model extends CI_model
{
    public function getAllPetugas()
    {
        return $this->db->get('petugas')->result_array();
    }

    public function tambahDataPetugas()
    {
        $data = [

            "nama_depan" => $this->input->post('namadepan', true),
            "nama_belakang" => $this->input->post('namabelakang', true),
            "ttl" => $this->input->post('ttl', true),
            "agama" => $this->input->post('agama', true),
            "jenis_kelamin" => $this->input->post('jenkel', true),
            "jenis_identitas" => $this->input->post('jenisidentitas', true),
            "no_identitas" => $this->input->post('noid', true),
            "alamat" => $this->input->post('alamat', true),
            "pos" => $this->input->post('pos', true),
            "username" => $this->input->post('username', true),
            "email" => $this->input->post('email', true),
            "no_telepon" => $this->input->post('notelp', true),
            "password" => md5($this->input->post('password', true)),
            "level" => $this->input->post('level', true)

        ];

        $this->db->insert('petugas', $data);
    }
    
}
