<?php
class Riwayat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Riwayat_model', 'rm'); //load model Admin
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
        $data['title'] = 'Riwayat Pembayaran SPP';
        $data['datas'] = $this->rm->semuaRiwayat();
        $this->load->view('admin/temp/nav',$data);
        $this->load->view('admin/riwayat.php');
        $this->load->view('admin/temp/footer');
    }
}

?>