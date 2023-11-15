<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public function semuaSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function tambahSiswa()
    {
        // get data yang dikirim
        $nisn = $this->input->post('nisn');
        $nama = $this->input->post('nama_siswa');
        $thn_masuk = $this->input->post('thn_masuk');
        $gender = $this->input->post('gender');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        // satukan semua kedalam array data
        $data = [
            'nisn' => $nisn,
            'nama_siswa' => $nama,
            'tgl_masuk' => $thn_masuk,
            'gender' => $gender,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        ];

        // eksekusi query insert data ke table
        $this->db->insert('siswa', $data);
    }
}