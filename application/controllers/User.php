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
        $data['user'] = $this->um->semuaUser();
        //tampilkan data siswa
        $this->load->view('admin/temp/nav', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/temp/footer');
    }
    public function tambahUser()
    {
        // lakukan input data user
        $this->um->tambahUser();

        // jika data berhasil disimpan munculkan pesan berhasil
        $this->session->set_flashdata(
            'user_message',
            '<div class="alert alert-success" role="alert">
           Data User berhasil disimpan!
           </div>'
        );
        // arahkan ke halaman..
        redirect('user');
    }
}

?>