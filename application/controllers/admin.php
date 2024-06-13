<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_user');
    }
    public function index(){
        $data['user'] = $this->m_user->tampil_data()->result();
        $this->load->view('v_admin', $data);
    }
}