<?php

class Bencana_model extends CI_model
{
    public $img_bencana = "default.jpg";

    public function getAllBencana()
    {
        $query = $this->db->query("SELECT * FROM bencana ORDER BY id_bencana DESC")->result_array();
        return $query;
    }

    public function getGrafikBencana()
    {
        return $this->db->get('bencana')->result();
    }

    public function getBencanaById($id)
    {
        return $this->db->get_where('bencana', ['id_bencana' => $id])->row_array();
    }

    public function getTotalPengungsi()
    {
        $this->db->select('SUM(jumlah_pengungsi) as total');
        $this->db->from('bencana');
        return $this->db->get()->row()->total; 
    }

    public function getTotalProgram()
    {
        $this->db->select('COUNT(nama_program) as total');
        $this->db->from('bencana');
        return $this->db->get()->row()->total; 
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

    public function tambahDataBencana()
    {
        $data = [

            "nama_program" => $this->input->post('nama-program', true),
            "jenis_bencana" => $this->input->post('jenis-bencana', true),
            "jumlah_pengungsi" => $this->input->post('jumlah-pengungsi', true),
            "deskripsi" => $this->input->post('deskripsi', true)

        ];

        // $file_tmp = $_FILES['img']['tmp_name'];
        // $file_type = $_FILES['img']['type'];
        // $file_error = $_FILES['img']['error'];
        // $file_size = $_FILES['img']['size'];
        // $file_path = "assets/img/programs".$_POST['id_bencana'].".jpg";

        $this->db->where('id_bencana');
        $this->db->insert('bencana', $data);
    }

    public function cariDataBencana()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_program', $keyword);
        $this->db->or_like('jenis_bencana', $keyword);
        $this->db->or_like('jumlah_pengungsi', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('bencana')->result_array();
    }

}