<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp_model extends CI_Model
{

    public function semuaSpp()
    {
        $this->db->select('*');
        $this->db->from('spp');
        $this->db->order_by('id_spp', 'ASC'); // ASC untuk ascending order

        $query = $this->db->get();
        return $query->result_array();
    }
    public function semuaJurusan()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $this->db->order_by('id_jurusan', 'ASC'); // ASC untuk ascending order

        $query = $this->db->get();
        return $query->result_array();
    }
    public function semuadataKelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->order_by('kode_kelas', 'ASC'); // ASC untuk ascending order

        $query = $this->db->get();
        return $query->result_array();
    }
    public function tambahSpp()
    {
        // get data yang dikirim
        $thnMasuk = $this->input->post('thnMasuk');
        $id_spp = $this->input->post('idSpp');
        $jurusan = $this->input->post('jurusan');
        $nominal = $this->input->post('nominal');

        // satukan semua kedalam array data
        $data = [
            'id_spp' => $id_spp,
            'tahun_masuk' => $thnMasuk,
            'id_jurusan' => $jurusan,
            'nominal' => $nominal,
        ];

        // eksekusi query insert data ke table
        $this->db->insert('spp', $data);
    }
    public function hapusSpp($id)
    {
        $this->db->delete('spp', ['id_spp' => $id]);
    }

    public function editSpp($id)
    {
        $thnMasuk = $this->input->post('thnMasuk');
        $id_spp = $this->input->post('idSpp');
        $jurusan = $this->input->post('jurusan');
        $nominal = $this->input->post('nominal');

        // satukan semua kedalam array data
        $data = [
            'id_spp' => $id_spp,
            'tahun_masuk' => $thnMasuk,
            'id_jurusan' => $jurusan,
            'nominal' => $nominal,
        ];

        $this->db->where('id_spp', $id)->update('spp', $data);
    }
}