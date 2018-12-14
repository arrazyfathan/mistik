<?php

class Donatur_model extends CI_model
{
    public function getAllDonatur()
    {
        return $this->db->get('donatur')->result_array();
    }

    public function tambahDataDonatur()
    {
        $data = [

            "nama_lengkap" => $this->input->post('nama-lengkap', true),
            "username" => $this->input->post('username', true),
            "email" => $this->input->post('email', true),
            "password" => md5($this->input->post('password', true)),
            "alamat" => $this->input->post('alamat', true),
            "no_telepon" => $this->input->post('notelp', true)

        ];

        $this->db->insert('donatur', $data);
    }

    public function hapusDataDonatur($id)
    {
        $this->db->delete('donatur', array('id_donatur' => $id));
    }

}
