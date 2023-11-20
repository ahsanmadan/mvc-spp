<?php
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('User_model', 'um'); //load model Admin
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
        //kirim data (value) ke halaman
        $data['title'] = 'Data Petugas';
        $data['datas'] = $this->um->semuaUser();
        //tampilkan data siswa
        $this->load->view('admin/temp/nav', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/temp/footer');
    }
    public function tambahUser()
    {
        // post request
        $this->um->tambahUser();

        // alert
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil disimpan!
           </div>'
        );
        // arahkan ke halaman user
        redirect('user');
    }

    public function hapusUser($id)
    {
        $this->um->hapusUser($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
           Data berhasil dihapus!
           </div>'
        );
        // arahkan ke halaman..
        redirect('user');
    }

    public function editUser($id){
        $this->um->editUser($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil diperbarui!
           </div>'
        );
        // arahkan ke halaman..
        redirect('user');
    }
}

?>