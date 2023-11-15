<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
    public function semuaJurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }

    public function tambahJurusan()
    {
        // fetch data dengan post request
        $namajurusan = $this->input->post('nama_jurusan');
        $jurusan = $this->input->post('jurusan');

        // satukan ke dalam array
        $data = [
            'nama_jurusan' => $namajurusan,
            'jurusan' => $jurusan
        ];

        // eksekusi query insert data ke table
        $this->db->insert('jurusan', $data);
    }

    public function editJurusan($id)
    {
        $namajurusan = $this->input->post('nama_jurusan');
        $jurusan = $this->input->post('jurusan');

        // satukan ke dalam array
        $data = [
            'nama_jurusan' => $namajurusan,
            'jurusan' => $jurusan
        ];

        // eksekusi query insert data ke table
        $this->db->where('id_jurusan',$id)->update('jurusan', $data);
    }

    public function hapusJurusan($id){
        $this->db->delete('jurusan', ['id_jurusan' => $id]);
    }
}
