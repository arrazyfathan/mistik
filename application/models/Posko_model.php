<?php

class Posko_model extends CI_Model{

    public function getAllPosko()
    {
        return $this->db->get('posko')->result_array();
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
}