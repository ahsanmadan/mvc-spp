<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function semuaKelas()
    {
        return $this->db->get('kelas')->result_array();
    }
}