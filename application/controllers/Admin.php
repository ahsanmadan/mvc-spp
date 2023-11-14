<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_model', 'am'); //load model Admin
        // cek login
        if(!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('admin/temp/nav',$data);
        $this->load->view('admin/index');
        $this->load->view('admin/temp/footer');
    }
}

?>