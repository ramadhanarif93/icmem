<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            You must login!
            </div>');
            redirect('Auth');
        }

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['member'] = $this->db->query('SELECT * FROM tbl_user WHERE role_id = "2" ORDER BY name ASC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('member', $data);
        $this->load->view('temp/footer');
    }

    public function changePassword()
    {
        $this->form_validation->set_rules('passwordBaru1', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Fail! Reset or Change Password. Please try again.
               </div>');
        } else {


            $passwordBaru = $this->input->post('passwordBaru1');
            $data = [
                'password' => password_hash($passwordBaru, PASSWORD_DEFAULT)
            ];

            $this->db->set($data);
            $this->db->where('idUser', $this->input->post('id'));
            $this->db->update('tbl_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Success! Reset or Change Password.
               </div>');
        }
        redirect('Member/');
    }
}
