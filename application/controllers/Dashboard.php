<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        date_default_timezone_set("Asia/Bangkok");
    }

    public function index()
    {
        $jenis = $this->session->userdata('role_id');
        if ($jenis == "1") {
            $data['meeting'] = $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
            $this->load->view('temp/header');
            $this->load->view('home', $data);
            $this->load->view('temp/footer');
        } elseif ($jenis == "2") {
            //for member
            $d = '%Y-%m-%d';
            $time = time();
            $tgl = mdate($d, $time);

            $n1 = date("Y-m-d", strtotime("+1 day"));
            $n2 = date("Y-m-d", strtotime("+2 day"));

            $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['name'] . '") AND tanggal = "' . $tgl . '"')->result_array();
            $data['info'] = $this->db->query('SELECT * FROM tbl_info  ORDER BY idInfo DESC')->result_array();

            $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting WHERE meetingDate = NOW() ORDER BY meetingTimeStart ASC')->result_array();

            $data['day1'] = $this->db->query('SELECT * FROM tbl_meeting WHERE meetingDate = "2020-08-03" ORDER BY meetingTimeStart ASC')->result_array();

            $data['day2'] = $this->db->query('SELECT * FROM tbl_meeting WHERE meetingDate = "2020-08-04" ORDER BY meetingTimeStart ASC')->result_array();

            $data['day3'] = $this->db->query('SELECT * FROM tbl_meeting WHERE meetingDate = "2020-08-05" ORDER BY meetingTimeStart ASC')->result_array();

            $data['parallel1'] = $this->db->query('SELECT * FROM tbl_parallel WHERE meetingDate = "2020-08-03" ORDER BY meetingTimeStart ASC')->result_array();

            $data['parallel2'] = $this->db->query('SELECT * FROM tbl_parallel WHERE meetingDate = "2020-08-04" ORDER BY meetingTimeStart ASC')->result_array();

            $data['parallel3'] = $this->db->query('SELECT * FROM tbl_parallel WHERE meetingDate = "2020-08-05" ORDER BY meetingTimeStart ASC')->result_array();

            $data['schedule'] = $this->db->query('SELECT * FROM tbl_schedule order by start ASC')->result_array();

            $this->load->view('temp/header');
            $this->load->view('user/dashboard', $data);
            $this->load->view('temp/footer');
        }
    }
}
