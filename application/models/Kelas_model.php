<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function semuaKelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('kode_kelas', 'ASC'); // ASC untuk ascending order

        $query = $this->db->get();
        return $query->result_array();
    }
}