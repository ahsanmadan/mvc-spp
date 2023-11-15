<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
    public function semuaJurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }
}