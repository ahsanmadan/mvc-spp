<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function semuaUser()
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->order_by('id_petugas', 'ASC'); // ASC untuk ascending order

        $query = $this->db->get();
        return $query->result_array();
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

    public function editUser($id){
        $nama = $this->input->post('nama_edit');
        $username = $this->input->post('username_edit');
        $level = $this->input->post('level_edit');

        $data = [
            'nama_petugas' => $nama,
            'username' => $username,
            'level' => $level
        ];
        $this->db->where('id_petugas',$id)->update('petugas', $data);
    }

    public function hapusUser($id){
        $this->db->delete('petugas', ['id_petugas' => $id]);
    }
}