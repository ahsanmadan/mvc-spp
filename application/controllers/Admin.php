<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_model', 'adm'); //load model Admin
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
        $count = $this->adm->banyakData();
        $data['title'] = 'Dashboard';
        $data['cSiswa'] = $count['siswa'];
        $data['cJurusan'] = $count['jurusan'];
        $data['cKelas'] = $count['kelas'];
        $this->load->view('admin/temp/nav',$data);
        $this->load->view('admin/index');
        $this->load->view('admin/temp/footer');
    }
}

?>