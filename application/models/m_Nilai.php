<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class m_Nilai extends CI_Model {

        public function tampil_data($user_id, $table){
           
            $this->db->where('user_id', $user_id);
            return $this->db->get($table);
            

        }
    }