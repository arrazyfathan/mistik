<?php

class Uang_model extends CI_model
{
    public function getAllUang()
    {   
        $query = $this->db->query("SELECT * FROM uang ORDER BY id_uang DESC")->result_array();
        return $query;
    }

    public function getUangById($id)
    {
        return $this->db->get_where('uang', ['id_uang' => $id])->row_array();
    }

    // function auth_uang($program_donasi, $jumlah, $inlineRadioOptions){
    //     $query=$this->db->query("SELECT * FROM uang WHERE program_donasi = '$program_donasi', jumlah = '$jumlah', nama_bank = '$inlineRadioOptions' ");
    //     return $query;
    // }

    public function tambahDataUang()
    {
        $data = [

            "nama_donatur" => $this->input->post('nama-donatur', true),
            "program_donasi" => $this->input->post('program-donasi', true),
            "jumlah" => $this->input->post('jumlah', true),
            "metode_pembayaran" => $this->input->post('metode-pembayaran', true),
            "nama_bank" => $this->input->post('inlineRadioOptions', true)

        ];

        $this->db->insert('uang', $data);
    }

    // public function joinUang($id)
    // {   
    //     $this->db->get_where('uang', ['id_uang' => $id]);
    //     $this->db->get_where('donatur', ['id_donatur' => $id]);
    //     $this->db->select('*');
    //     $this->db->from('uang');
    //     $this->db->join('donatur', 'donatur.id_donatur = uang.id_uang');
    //     $query = $this->db->get()->result_array();
    //     return $query;

    // }
}
