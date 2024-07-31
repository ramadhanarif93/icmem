<?php

class Penggurus extends CI_Controller
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
        $data['biodata'] = $this->db->query('SELECT * FROM tbl_biodata')->result_array();
        $this->load->view('temp/header');
        $this->load->view('penggurus', $data);
        $this->load->view('temp/footer');
    }

    public function delete()
    {
        $this->form_validation->set_rules('id', 'Id', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal Mengahapus Data.
        </div>');
            redirect('Penggurus');
        } else {
            $hapus = [
                'idBiodata' => $this->input->post('id')
            ];

            $this->db->delete('tbl_biodata', $hapus);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Selamat! Data berhasil di hapus.
              </div>');
            redirect('Penggurus');
        }
    }
}
