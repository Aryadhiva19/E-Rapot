<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_Nilai');
    }
    public function index(){

        $data['nilai1'] = $this->m_Nilai->tampil_data()->result();
        $this->load->view('Halaman/rapot', $data);
    }
}