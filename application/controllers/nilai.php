<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_Nilai');
    }
    public function index(){
        $user_id = $this->session->userdata('user_id');

        if ($user_id == 1) {
            // Jika user_id adalah 1, ambil data dari tabel nilai1
            $data['nilai'] = $this->m_Nilai->tampil_data($user_id, 'nilai1')->result();
        } elseif ($user_id == 2) {
            // Jika user_id adalah 2, ambil data dari tabel nilai2
            $data['nilai'] = $this->m_Nilai->tampil_data($user_id, 'nilai2')->result();
        } else {
            // Tambahkan penanganan untuk user_id lainnya jika diperlukan
            $data['nilai'] = [];
        }
        
        $this->load->view('Halaman/rapot', $data);
    }
}
