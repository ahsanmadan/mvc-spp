<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function index()
  {
    // lakukan validasi form
    $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      // tampilkan halaman login
      $this->load->view('login/login');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $user = $this->input->post('username', true);
    $pass = $this->input->post('password', true);

    // lakukan pengecekan username
    $datauser = $this->db->get_where('petugas', ['username' => $user])->row_array();

    // jika username ada
    if ($datauser) {
      // cek user aktif
      if ($datauser['is_active'] == 1) {
        // cek password
        if (password_verify($pass, $datauser['password'])) {
          // jika password sesuai

          // buat session login
          $data = [
            'username' => $datauser['username'],
            'full_name' => $datauser['nama_petugas'],
            'level' => $datauser['level']
          ];
          $this->session->set_userdata($data);
          $this->session->set_flashdata(
            'login_message',
            "<script>
            $(document).ready(function () {
                // Panggil fungsi show modal saat halaman dimuat
                $('#loginModal').modal('show');
            });
            </script>"
          );

          // arahkan ke controller admin
          redirect('admin');
        } else {
          // jika password salah
          $this->session->set_flashdata(
            'login_message',
            '<div class="alert alert-danger" role="alert">
            Username atau Password anda salah!
           </div>'

          );
          redirect('auth');
        }
      } else {
        // jika user tidak aktif
        $this->session->set_flashdata(
          'login_message',
          '<div class="alert alert-danger" role="alert">
          Akun anda belum diaktifkan!
         </div>'
        );
        redirect('auth');
      }
    } else {
      // jika username tidak ada
      $this->session->set_flashdata(
        'login_message',
        '<div class="alert alert-danger" role="alert">
        Username atau Password anda salah!
       </div>'
      );
      redirect('auth');
    }
  }

  public function logout()
  {
    // kill session aktif
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('full_name');
    $this->session->unset_userdata('level');
    $this->session->set_flashdata(
      'login_message',
      '<div class="alert alert-success" role="alert">
      Anda berhasil keluar!
     </div>'
    );
    // arahkan ke halaman login
    redirect('auth');
  }

  public function forbiden()
  {
    // panggil halaman forbiden
    $this->load->view('login/forbiden');
  }
}
