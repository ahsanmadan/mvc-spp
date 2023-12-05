<?php
class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model', 'sm');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata(
                'login_message',
                '<div class="alert alert-danger" role="alert">
                Silahkan login terlebih dahulu!
               </div>'
            );
            redirect('auth');
        }
    }

    public function index()
    {
        //kirim data ke halaman
        $data['title'] = 'Data Siswa';
        $data['datas'] = $this->sm->semuaSiswa();
        $data['datasKelas'] = $this->sm->semuadataKelas();
        $data['datasSpp'] = $this->sm->semuadataSpp();
        $data['datasJurusan'] = $this->sm->semuadataJurusan();
        //tampilkan data siswa
        $this->load->view('admin/temp/nav', $data);
        $this->load->view('admin/siswa');
        $this->load->view('admin/temp/footer');
    }
    public function tambahSiswa()
    {
        $this->sm->tambahSiswa();
        // jika data berhasil disimpan munculkan pesan berhasil
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil disimpan!
           </div>'
        );
        // arahkan kembali ke halaman siswa
        redirect('siswa');
    }
    public function hapusSiswa($id)
    {
        $this->sm->hapusSiswa($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
           Data berhasil dihapus!
           </div>'
        );
        // arahkan kembali ke halaman siswa
        redirect('siswa');
    }
    public function editSiswa($id){
        $this->sm->editSiswa($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
           Data berhasil diperbarui!
           </div>'
        );
        // arahkan kembali ke halaman siswa
        redirect('siswa');
    }
}

?>