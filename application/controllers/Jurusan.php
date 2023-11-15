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
                Please login first!
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
}

?>