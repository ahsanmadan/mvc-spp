<?php
class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Kelas_model', 'km'); //load model Admin
        // cek login
        if (!$this->session->userdata('username')) {
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
        $data['title'] = 'Data Kelas';
        $data['datas'] = $this->km->semuaKelas();
        $data['datasJurusan'] = $this->km->semuaJurusan();
        $this->load->view('admin/temp/nav', $data);
        $this->load->view('admin/kelas');
        $this->load->view('admin/temp/footer');
    }

    public function tambahKelas()
    {
        $this->km->tambahKelas();

        $this->session->set_flashdata(
            'user_message',
            '<div class="alert alert-success" role="alert">
            Data berhasil disimpan!
           </div>'
        );
        // arahkan ke halaman..
        redirect('kelas');
    }

    public function hapusKelas($id)
    {
        $this->km->hapusKelas($id);

        $this->session->set_flashdata(
            'user_message',
            '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!
           </div>'
        );
        // arahkan ke halaman..
        redirect('kelas');
    }
}

?>