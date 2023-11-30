<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function banyakData()
    {
        $this->db->from('siswa');
        $countSiswa = $this->db->count_all_results();
        $this->db->from('kelas');
        $countKelas = $this->db->count_all_results();
        $this->db->from('jurusan');
        $countJurusan = $this->db->count_all_results();

        return array(
            'siswa' => $countSiswa,
            'kelas' => $countKelas,
            'jurusan' => $countJurusan
        );
    }
}