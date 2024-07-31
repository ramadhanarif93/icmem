<?php

class Polling extends CI_Controller
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
        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling ORDER BY tanggal,idPolling DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('polling', $data);
        $this->load->view('temp/footer');
    }

    public function resultPolling()
    {
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);

        $n1 = date("Y-m-d", strtotime("-1 day"));
        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling where tanggal="' . $n1 . '" ORDER BY tanggal DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/resultPolling', $data);
        $this->load->view('temp/footer');
    }

    public function listVotePolling()
    {
        $idPolling = $this->input->post('id');
        $answer = $this->input->post('answer');
        $data['vote'] = $this->db->query('SELECT * FROM tbl_polling
        JOIN tbl_polling_answer ON tbl_polling.idPolling = tbl_polling_answer.idPolling
        WHERE tbl_polling.idPolling = ' . $idPolling . ' AND tbl_polling_answer.answer = "' . $answer . '"  ORDER BY tbl_polling_answer.idPollingAnswer')->result_array();

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling where tanggal=DATE_FORMAT(NOW(), "%Y-%m-%d") ORDER BY tanggal DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('listVotePolling', $data);
        $this->load->view('temp/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('answerA', 'Answer A', 'required');
        $this->form_validation->set_rules('answerB', 'Answer B', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error input data, Please try again.
            </div>');
        } else {
            $data = [
                'tanggal' => $this->input->post('date'),
                'question' => $this->input->post('question'),
                'answerA' => $this->input->post('answerA'),
                'answerB' => $this->input->post('answerB'),
                'answerC' => $this->input->post('answerC')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Seccess input data.
            </div>');

            $this->db->insert('tbl_polling', $data);
        }

        redirect('Polling/');
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
                'idPolling' => $this->input->post('id')
            ];

            $this->db->delete('tbl_polling', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success delete data.
            </div>');
        }

        redirect('Polling/');
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id Polling', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('answerA', 'Answer A', 'required');
        $this->form_validation->set_rules('answerB', 'Answer B', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Error edit data, Please try again.
            </div>');
        } else {
            $data = [
                'tanggal' => $this->input->post('date'),
                'question' => $this->input->post('question'),
                'answerA' => $this->input->post('answerA'),
                'answerB' => $this->input->post('answerB'),
                'answerC' => $this->input->post('answerC')
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success edit data.
            </div>');

            $this->db->set($data);
            $this->db->where('idPolling', $this->input->post('id'));
            $this->db->update('tbl_polling');
        }

        redirect('Polling/');
    }

    public function inputPolling()
    {
        $this->form_validation->set_rules('idPolling', 'id Polling', 'required');

        $answer = $this->input->post('answer');

        $sql = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling = ' . $this->input->post('idPolling') . '')->result_array();
        foreach ($sql as $dataSql) {
            $sumA = $dataSql['sumA'];
            $sumB = $dataSql['sumB'];
            $sumC = $dataSql['sumC'];
        }

        if ($answer == "A") {
            $sumA++;
        } elseif ($answer == "B") {
            $sumB++;
        } elseif ($answer == "C") {
            $sumC++;
        }

        $data = [
            'sumA' => $sumA,
            'sumB' => $sumB,
            'sumC' => $sumC
        ];

        $this->db->set($data);
        $this->db->where('idPolling', $this->input->post('idPolling'));
        $this->db->update('tbl_polling');

        $dataKlik = [
            'idPolling' => $this->input->post('idPolling'),
            'answer' => $answer,
            'username' => $this->session->userdata('name')
        ];

        $this->db->insert('tbl_polling_answer', $dataKlik);

        $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">
            Success send data Polling.
            </div>');

        redirect('Dashboard');
    }
}
