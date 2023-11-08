<?php
class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_model', 'am'); //load model Admin
        // cek login
        // if(!$this->session->userdata('username')) {
        //     redirect('Auth/forbiden');
        // }
    }
	
	public function index () {
        $this->load->view('admin/temp/nav');
        $this->load->view('admin/index');
	}
}

?>