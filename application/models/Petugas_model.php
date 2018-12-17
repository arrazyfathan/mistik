<?php

class Petugas_model extends CI_model
{
    public function getAllPetugas()
    {
        $query = $this->db->query("SELECT * FROM petugas ORDER BY id_petugas DESC")->result_array();
        return $query;
    }

    public function getPetugasById($id)
    {
        return $this->db->get_where('petugas', ['id_petugas' => $id])->row_array();
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

    public function hapusDataPetugas($id)
    {
        $this->db->delete('petugas', array('id_petugas' => $id));
    }

    public function editDataPetugas($id)
    {
        $data = [

            "nama_depan" => $this->input->post('nama-depan', true),
            "nama_belakang" => $this->input->post('nama-belakang', true),
            "no_telepon" => $this->input->post('notelp', true),
            "alamat" => $this->input->post('alamat', true)

        ];

        $this->db->where('id_petugas', $id);
        $this->db->update('petugas', $data);
    }

    public function cariDataPetugas()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_depan', $keyword);
        $this->db->or_like('nama_belakang', $keyword);
        $this->db->or_like('no_telepon', $keyword);
        $this->db->or_like('ttl', $keyword);
        $this->db->or_like('agama', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('jenis_identitas', $keyword);
        $this->db->or_like('no_identitas', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('petugas')->result_array();
    }
    
}
