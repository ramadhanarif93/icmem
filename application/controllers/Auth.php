<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('login/loginpage');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //mengecek apakah user terdaftar atau tidak
        $user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();

        //jika user ada
        if ($user) {
            //jika user aktif
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'name' => $user['name'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Wrong password!
               </div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Worng Username!
               </div>');
            redirect('Auth');
        }
    }

    public function nambih()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password', 'required');

        //cek apakah sudah klik daftarkan akun atau belum
        if ($this->form_validation->run() == false) {
            $this->load->view('login/register');
        } else {
            //jika sudah di isi form nya
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id')
            ];
            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! Akun Anda Telah Terdaftarkan.
          </div>');
            redirect('Auth');
        }
    }

    public function changePassword()
    {
        $this->form_validation->set_rules('passwordLama', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            // From Validation Error
            // </div>');

            $this->load->view('temp/header');
            $this->load->view('user/changePass');
            $this->load->view('temp/footer');
        } else {

            //mengecek apakah user terdaftar atau tidak
            $username = $this->session->userdata('username');
            $user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
            $passwordLama = $this->input->post('passwordLama');
            $passwordBaru = $this->input->post('passwordBaru1');

            if (password_verify($passwordLama, $user['password'])) { //jika password lama benar
                $data = [
                    'password' => password_hash($passwordBaru, PASSWORD_DEFAULT)
                ];

                $this->db->set($data);
                $this->db->where('idUser', $user['idUser']);
                $this->db->update('tbl_user');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Success! Change Password.
               </div>');
            } else { //jika password lama salah
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Wrong old password!
               </div>');
            }

            $this->load->view('temp/header');
            $this->load->view('user/changePass');
            $this->load->view('temp/footer');
        }
    }
    public function importUser()
    {
        $ambil = $this->db->query('SELECT * FROM tbl_dummy')->result_array();

        foreach ($ambil as $ss) {
            $data = [
                'name' => $ss['name'],
                'username' => $ss['email'],
                'password' => password_hash($ss['pass'], PASSWORD_DEFAULT),
                'role_id' => "2"
            ];

            $this->db->insert('tbl_user', $data);
        }

        var_dump("Done");
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logout!
      </div>');
        redirect('Auth');
    }
}
