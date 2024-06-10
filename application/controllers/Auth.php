<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');  
        $this->load->database();
    }
    public function index()
    {   
        $this->form_validation->set_rules('username', 'username', 'trim|required|alpha_numeric');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('halaman/Login');
        } else {
            $this->login();
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if($user) {
            // Verifikasi password tanpa hashing
            if($password == $user['password']) {
                // Jika password benar
                // Set sesi atau lakukan tindakan login lainnya
                $this->session->set_userdata(['username' => $username]);
                redirect('rapot'); // Arahkan ke halaman yang sesuai setelah login
            } else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
            redirect('Auth');
        }
    }
    public function tes()
    {
        $this->load->view('tes');
    }
    public function pes()
    {
        $this->load->view('pes');
    }
}
