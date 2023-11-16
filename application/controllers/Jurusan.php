<?php
class Jurusan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Jurusan_model', 'jm'); //load model Admin
        // cek login
        if(!$this->session->userdata('username')) {
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
        $data['title'] = 'Data Jurusan';
        $data['datas'] = $this->jm->semuaJurusan();
        $this->load->view('admin/temp/nav',$data);
        $this->load->view('admin/jurusan');
        $this->load->view('admin/temp/footer');
    }
    public function tambahJurusan()
    {
        // input data jurusan ke model
        $this->jm->tambahJurusan();

        // jika data berhasil disimpan munculkan pesan berhasil
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil disimpan!
           </div>'
        );
        // arahkan ke halaman..
        redirect('jurusan');
    }

    public function editJurusan($id)
    {
        $this->jm->editJurusan($id);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil disimpan!
           </div>'
        );
        // arahkan ke halaman..
        redirect('jurusan');
    }

    public function hapusJurusan($id){
        $this->jm->hapusJurusan($id);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!
           </div>'
        );
        // arahkan ke halaman..
        redirect('jurusan');
    }
}

?>