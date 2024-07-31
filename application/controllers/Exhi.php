<?php

class Exhi extends CI_Controller
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
        $data['exhi'] = $this->db->query('SELECT * FROM tbl_exhi  ORDER BY idExhi DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('exhi', $data);
        $this->load->view('temp/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('title', 'title', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error input data, Please try again.
            </div>');
        } else {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('logo');

            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'instagram' => $this->input->post('instagram'),
                'youtube' => $this->input->post('youtube'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'logo' => $this->upload->data('file_name')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Seccess input data.
            </div>');

            $this->db->insert('tbl_exhi', $data);
        }

        redirect('Exhi/');
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
                'idExhi' => $this->input->post('id')
            ];

            $this->db->delete('tbl_exhi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success delete data.
            </div>');
        }

        redirect('Exhi/');
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id Info', 'required');
        $this->form_validation->set_rules('title', 'title', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error edit data, Please try again.
            </div>');
        } else {

            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('logo');

            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'instagram' => $this->input->post('instagram'),
                'youtube' => $this->input->post('youtube'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'logo' => $this->upload->data('file_name')
            ];


            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success edit data.
            </div>');

            $this->db->set($data);
            $this->db->where('idExhi', $this->input->post('id'));
            $this->db->update('tbl_exhi');
        }

        redirect('Exhi/');
    }
}
