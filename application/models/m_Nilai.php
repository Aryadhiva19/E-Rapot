<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class m_Nilai extends CI_Model {

        public function tampil_data(){
            return $this->db->get('nilai1');
        }
    }