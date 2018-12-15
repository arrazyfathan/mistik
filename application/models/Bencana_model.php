<?php

class Bencana_model extends CI_model
{

    public function getAllBencana()
    {
        return $this->db->get('bencana')->result_array();
    }

    public function hapusDataBencana($id)
    {
        $this->db->delete('bencana', array('id_bencana' => $id));
    }

    public function editDataBencana($id)
    {
        $data = [

            "nama_program" => $this->input->post('nama-program', true),
            "jenis_bencana" => $this->input->post('jenis-bencana', true),
            "jumlah_pengungsi" => $this->input->post('jumlah-pengungsi', true),
            "deskripsi" => $this->input->post('deskripsi', true)

        ];

        $this->db->where('id_bencana', $id);
        $this->db->update('bencana', $data);
    }

}