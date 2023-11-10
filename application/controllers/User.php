<?php
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('User_model', 'um'); //load model Admin
        // cek login
        // if(!$this->session->userdata('username')) {
        //     redirect('Auth/forbiden');
        // }
    }

    public function index()
    {
        //kirim data (value) ke halaman
        $data['title'] = 'Users data';

        //tampilkan data siswa
        $this->load->view('admin/temp/nav', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/temp/footer');
    }
}

?>