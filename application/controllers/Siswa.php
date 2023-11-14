<?php
class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Siswa_model', 'sm'); //load model Admin
        // cek login
        if(!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        //kirim data (value) ke halaman
        $data['title'] = 'Students data';

        //tampilkan data siswa
        $this->load->view('admin/temp/nav', $data);
        $this->load->view('admin/siswa');
        $this->load->view('admin/temp/footer');
    }
}

?>