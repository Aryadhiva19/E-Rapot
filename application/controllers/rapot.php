<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rapot extends CI_Controller {
    
    public function index() {

        $this->load->view('Halaman/rapot');
        $this->input->view('');
    }
}