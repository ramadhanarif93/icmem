<?php

class Workshop extends CI_Controller
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
        $data['workshop'] = $this->db->query('SELECT * FROM tbl_workshop ORDER BY idWorkshop DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('workshop', $data);
        $this->load->view('temp/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('company', 'Company', 'required');
        $this->form_validation->set_rules('hyperlink', 'Hyperlink', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error input data, Please try again.
            </div>');
        } else {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('workshop');

            $data = [
                'company' => $this->input->post('company'),
                'hyperlink' => $this->input->post('hyperlink'),
                'description' => $this->input->post('description'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'logo' => $this->upload->data('file_name')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success input data.
            </div>');

            $this->db->insert('tbl_workshop', $data);
        }

        redirect('workshop/');
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
                'idWorkshop' => $this->input->post('id')
            ];

            $this->db->delete('tbl_workshop', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success delete data.
            </div>');
        }

        redirect('Workshop/');
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id Workshop', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error edit data, Please try again.
            </div>');
        } else {

            if ($this->input->post('logo') == " ") {
                $data = [
                    'company' => $this->input->post('company'),
                    'hyperlink' => $this->input->post('hyperlink'),
                    'description' => $this->input->post('description')
                ];
            } else {
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'jpg|png|jpeg';

                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('workshop');

                $data = [
                    'company' => $this->input->post('company'),
                    'hyperlink' => $this->input->post('hyperlink'),
                    'description' => $this->input->post('description'),
                    'meetingTimeStart' => $this->input->post('timeStart'),
                    'meetingTimeEnd' => $this->input->post('timeEnd'),
                    'logo' => $this->upload->data('file_name')
                ];
            }

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success edit data.
            </div>');

            $this->db->set($data);
            $this->db->where('idWorkshop', $this->input->post('id'));
            $this->db->update('tbl_workshop');
        }

        redirect('Workshop/');
    }
}
