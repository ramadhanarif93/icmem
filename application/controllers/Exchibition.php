<?php

class Exchibition extends CI_Controller
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
        $data['exchibition'] = $this->db->query('SELECT * FROM tbl_exchibition ORDER BY idExchibition DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('exchibition', $data);
        $this->load->view('temp/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('embed', 'Embed', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error input data, Please try again.
            </div>');
        } else {
            $namaFileBaru = $this->input->post('title', true) . '' . time() . '-' . $_FILES["fileimport"]['name'];
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $namaFileBaru;

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('logo');

            $data = [
                'title' => $this->input->post('title'),
                'embed' => $this->input->post('embed'),
                'logo' => $this->upload->data('file_name'),
                'category' => $this->input->post('category'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'description' => $this->input->post('description')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success input data.
            </div>');

            $this->db->insert('tbl_exchibition', $data);
        }

        redirect('Exchibition/');
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
                'idExchibition' => $this->input->post('id')
            ];

            $this->db->delete('tbl_exchibition', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success delete data.
            </div>');
        }

        redirect('exchibition/');
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id Exchibition', 'required');
        $this->form_validation->set_rules('embed', 'Embed', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error edit data, Please try again.
            </div>');
        } else {
            $namaFileBaru = $this->input->post('title', true) . '' . time() . '-' . $_FILES["fileimport"]['name'];
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $namaFileBaru;

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('logo');

            $data = [
                'title' => $this->input->post('title'),
                'embed' => $this->input->post('embed'),
                'logo' => $this->upload->data('file_name'),
                'category' => $this->input->post('category'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'description' => $this->input->post('description')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success edit data.
            </div>');

            $this->db->set($data);
            $this->db->where('idExchibition', $this->input->post('id'));
            $this->db->update('tbl_exchibition');
        }

        redirect('Exchibition/');
    }
}
