<?php
class Dataspp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Spp_model', 'spm'); //load model Admin
        // cek login
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
        //kirim data (value) ke halaman
        $data['title'] = 'Data Spp';
        $data['datas'] = $this->spm->semuaSpp();
        $data['datasKelas'] = $this->spm->semuadataKelas();
        $data['datasJurusan'] = $this->spm->semuaJurusan();
        //tampilkan data siswa
        $this->load->view('admin/temp/nav', $data);
        $this->load->view('admin/spp');
        $this->load->view('admin/temp/footer');
    }
    public function tambahSpp()
    {
        $this->spm->tambahSpp();
        // jika data berhasil disimpan munculkan pesan berhasil
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil disimpan!
           </div>'
        );
        // arahkan ke halaman..
        redirect('dataspp');
    }
    public function hapusSpp($id)
    {
        $this->spm->hapusSpp($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
           Data berhasil dihapus!
           </div>'
        );
        // arahkan ke halaman..
        redirect('dataspp');
    }
    public function editSpp($id)
    {
        $this->spm->editSpp($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
           Data berhasil diperbarui!
           </div>'
        );
        // arahkan ke halaman..
        redirect('dataspp');
    }
}

?>