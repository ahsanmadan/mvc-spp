<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

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

        $data = [
            'nisn' => $nisn,
            'nis' => $nis,
            'nama_siswa' => $nama,
            'id_kelas' => $kelas,
            'no_telp' => $noHp,
            'alamat' => $alamat,
            'id_spp' => $idSpp
        ];

        // masukkan ke database
        $this->db->insert('siswa', $data);
    }
    public function hapusSiswa($id){
        $this->db->delete('siswa', ['nisn' => $id]);
    }
    public function editSiswa($id){
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $alamat = $this->input->post('alamat');
        $noHp = $this->input->post('nohp');
        $idSpp = $this->input->post('idSpp');

        $data = [
            'nama_siswa' => $nama,
            'id_kelas' => $kelas,
            'alamat' => $alamat,
            'no_telp' => $noHp,
            'id_spp' => $idSpp
        ];

        $this->db->where('nisn' , $id)->update('siswa',$data);
    }

    public function importExcel()
    {
        if(isset($_FILES["file"]["name"])){
              // upload
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_name = $_FILES['file']['name'];
            $file_size =$_FILES['file']['size'];
            $file_type=$_FILES['file']['type'];
            // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads
            
            $object = PHPExcel_IOFactory::load($file_tmp);
    
            foreach($object->getWorksheetIterator() as $worksheet){
    
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
    
                for($row=4; $row<=$highestRow; $row++){
    
                    $nim = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $angkatan = $worksheet->getCellByColumnAndRow(2, $row)->getValue();

                    $data[] = array(
                        'nim'          => $nim,
                        'nama'          =>$nama,
                        'angkatan'         =>$angkatan,
                    );
    
                } 
    
            }
    
            $this->db->insert_batch('mahasiswa', $data);
    
            $message = array(
                'message'=>'<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
            );
            
            $this->session->set_flashdata($message);
            redirect('import');
        }
        else
        {
             $message = array(
                'message'=>'<div class="alert alert-danger">Import file gagal, coba lagi</div>',
            );
            
            $this->session->set_flashdata($message);
            redirect('import');
        }
    }
}