<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    public function semuaPembayaran(){
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->order_by('tgl_bayar', 'DESC'); 

        $query = $this->db->get();
        return $query->result_array();
    }
    public function semuaSiswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->order_by('nama_siswa', 'ASC'); 

        $query = $this->db->get();
        return $query->result_array();
    }
    public function semuadataKelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('kode_kelas', 'ASC'); 

        $query = $this->db->get();
        return $query->result_array();
    }
    public function semuadataSpp()
    {
        $this->db->select('*');
        $this->db->from('spp');
        $this->db->order_by('id_spp', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }
}