<?php

class Info extends CI_Controller
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
        $data['info'] = $this->db->query('SELECT * FROM tbl_info ORDER BY idInfo DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('info', $data);
        $this->load->view('temp/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error input data, Please try again.
            </div>');
        } else {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('info');

            $data = [
                'link' => $this->input->post('link'),
                'info' => $this->upload->data('file_name')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Seccess input data.
            </div>');

            $this->db->insert('tbl_info', $data);
        }

        redirect('Info/');
    }

    public function delete()
    {
        $this->form_validation->set_rules('id', 'id Delete', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error delete data, Please try again.
            </div>');
        } else {
            $data = [
                'idInfo' => $this->input->post('id')
            ];

            $this->db->delete('tbl_info', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success delete data.
            </div>');
        }

        redirect('Info/');
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id Info', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error edit data, Please try again.
            </div>');
        } else {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('info');

            $data = [
                'link' => $this->input->post('link'),
                'info' => $this->upload->data('file_name')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success edit data.
            </div>');

            $this->db->set($data);
            $this->db->where('idInfo', $this->input->post('id'));
            $this->db->update('tbl_info');
        }

        redirect('Info/');
    }
}
