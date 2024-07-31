<?php
class Resources extends CI_Controller
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
        $this->load->helper(array('url', 'download'));
    }

    public function index()
    {
        $data['resources'] = $this->db->query('SELECT * FROM tbl_resources ORDER BY idResources DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('resources', $data);
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
            $config['upload_path'] = './assets/file/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|rar|docx|xlsx|doc|xls|ppt|pptx|zip|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('resources');

            $data = [
                'title' => $this->input->post('title'),
                'link' => $this->input->post('link'),
                'resources' => $this->upload->data('file_name')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success input data.
            </div>');

            $this->db->insert('tbl_resources', $data);
        }

        redirect('Resources/');
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
                'idResources' => $this->input->post('id')
            ];

            $this->db->delete('tbl_resources', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success delete data.
            </div>');
        }

        redirect('Resources/');
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


            $config['upload_path'] = './assets/pdf/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|rar|docx|xlsx|doc|xls|ppt|pptx|zip|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('resources');

            $data = [
                'title' => $this->input->post('title'),
                'link' => $this->input->post('link'),
                'resources' => $this->upload->data('file_name')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success edit data.
            </div>');

            $this->db->set($data);
            $this->db->where('idResources', $this->input->post('id'));
            $this->db->update('tbl_resources');
        }

        redirect('Resources/');
    }

    public function downloadFile()
    {
        $file = $this->input->post('file');
        force_download('assets/file/Form_Gaji___2020_-_Iqlimawati.pdf');
    }
}
