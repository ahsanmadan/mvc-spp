<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat_model extends CI_Model
{
    public function semuaRiwayat(){
        $this->db->select("*");
        $this->db->from("pembayaran");
        $this->db->order_by("tgl_bayar", "DESC");

        $query = $this->db->get();
        return $query->result_array();
    }
}