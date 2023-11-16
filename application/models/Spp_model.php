<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp_model extends CI_Model
{

    public function semuaSpp()
    {
        return $this->db->get('spp')->result_array();
    }
    public function semuadataKelas()
    {
        return $this->db->get('kelas')->result_array();
    }
    public function tambahSiswa()
    {
        // get data yang dikirim
        $nisn = $this->input->post('nisn');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $alamat = $this->input->post('alamat');
        $noHp = $this->input->post('nohp');
        $idSpp = $this->input->post('idSpp');

        // satukan semua kedalam array data
        $data = [
            'nisn' => $nisn,
            'nis' => $nis,
            'nama_siswa' => $nama,
            'id_kelas' => $kelas,
            'no_telp' => $noHp,
            'alamat' => $alamat,
            'id_spp' => $idSpp
        ];

        // eksekusi query insert data ke table
        $this->db->insert('siswa', $data);
    }
    public function hapusSiswa($id){
        $this->db->delete('siswa', ['nisn' => $id]);
    }
}