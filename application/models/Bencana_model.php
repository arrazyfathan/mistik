<?php

class Bencana_model extends CI_model
{
    public $img_bencana = "default.jpg";

    public function getAllBencana()
    {
        $query = $this->db->query("SELECT * FROM bencana ORDER BY id_bencana DESC")->result_array();
        return $query;
    }

    public function tableBencana($limit, $start)
    {
        $query = $this->db->get('bencana', $limit, $start);
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

    public function cariDataBencana()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_program', $keyword);
        $this->db->or_like('jenis_bencana', $keyword);
        $this->db->or_like('jumlah_pengungsi', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('bencana');
    }

// ---------------------------------------------------------------

    public function view(){
		return $this->db->get('bencana')->result();
	}

    // Fungsi untuk melakukan proses upload file
    public function upload() {
    $config['upload_path'] = './assets/img/programs/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;

    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
    // Jika berhasil :
    $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    return $return;
    }else{
    // Jika gagal :
    $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    return $return;
        }
    }

    // Fungsi untuk menyimpan data ke database
    public function tambahDataBencana($upload) {
    $data = array(
        "nama_program" => $this->input->post('nama-program', true),
        "jenis_bencana" => $this->input->post('jenis-bencana', true),
        "jumlah_pengungsi" => $this->input->post('jumlah-pengungsi', true),
        "deskripsi" => $this->input->post('deskripsi', true),
        'img_bencana' => $upload['file']['file_name']
    );
    
    $this->db->insert('bencana', $data);
    }

}
