<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function semuaUser()
    {
        return $this->db->get('petugas')->result_array();
    }
    public function tambahUser()
    {
        // get data yang dikirim
        $username = $this->input->post('username');
        $pw = $this->input->post('password');
        $pw_hash = password_hash($pw, PASSWORD_DEFAULT);
        $nama = $this->input->post('nama_petugas');
        $level = $this->input->post('level');
        // satukan semua kedalam array data
        $data = [
            'username' => $username,
            'password' => $pw_hash,
            'nama_petugas' => $nama,
            'level' => $level,
        ];

        // eksekusi query insert data ke table
        $this->db->insert('petugas', $data);
    }
}