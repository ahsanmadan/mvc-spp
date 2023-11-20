<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function semuaKelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('kode_kelas', 'ASC'); 

        $query = $this->db->get();
        return $query->result_array();
    }
    public function semuaJurusan()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $this->db->order_by('id_jurusan', 'ASC'); 

        $query = $this->db->get();
        return $query->result_array();
    }
    public function tambahKelas(){
        $nama = $this->input->post('nama');
        $kode = $this->input->post('kodeKelas');
        $jurusan = $this->input->post('jurusan');
        $tahun = $this->input->post('tahun');

        $data = [
            'nama_kelas' => $nama,
            'kode_kelas' => $kode,
            'id_jurusan' => $jurusan,
            'tahun_angkatan' => $tahun,
        ];
        $this->db->insert('kelas', $data);

    }
    public function hapusKelas($id){
        $this->db->delete('kelas', ['id_kelas' => $id]);
    }
}