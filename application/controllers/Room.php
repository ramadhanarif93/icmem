<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
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
        $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('room', $data);
        $this->load->view('temp/footer');
    }

    public function edit($id)
    {
        $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting WHERE idMeeting = ' . $id . '')->result_array();
        $this->load->view('temp/header');
        $this->load->view('editRoom', $data);
        $this->load->view('temp/footer');
    }

    public function editParallel($id)
    {
        $data['meeting'] = $this->db->query('SELECT * FROM tbl_parallel WHERE idParallel = ' . $id . ' ')->result_array();
        $data['session'] = $this->db->query('SELECT DISTINCT session FROM tbl_session')->result_array();
        $this->load->view('temp/header');
        $this->load->view('editRoomParallel', $data);
        $this->load->view('temp/footer');
    }

    public function editProses()
    {
        $this->form_validation->set_rules('topic', 'Topic', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('meetingID', 'meetingID', 'required');
        $this->form_validation->set_rules('meetingPWD', 'meetingPWD', 'required');

        if ($this->form_validation->run() == false) {
        } else {

            $namaFileBaru = $this->input->post('name', true) . '' . time() . '-' . $_FILES["fileimport"]['name'];
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $namaFileBaru;

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');

            $data = [
                'topic' => $this->input->post('topic'),
                'meetingDate' => $this->input->post('date'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'meetingID' => $this->input->post('meetingID'),
                'meetingPWD' => $this->input->post('meetingPWD'),
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'description' => $this->input->post('description'),
                'meet' => $this->input->post('meet'),
                'link' => $this->input->post('link'),
                'foto' => $this->upload->data('file_name')
            ];

            $this->db->set($data);
            $this->db->where('idMeeting', $this->input->post('id'));
            $this->db->update('tbl_meeting');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Edit Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
            redirect('Room/');
        }
    }

    public function turn()
    {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Activation link google meet has been changed
               </div>');

        $data = [
            'meetStatus' => $this->input->post('turn')
        ];

        $this->db->set($data);
        $this->db->where('idMeeting', $this->input->post('id'));
        $this->db->update('tbl_meeting');

        redirect('Room/');
    }

    public function turnParallel()
    {
        $data = [
            'meetStatus' => $this->input->post('turn')
        ];

        $this->db->set($data);
        $this->db->where('idParallel', $this->input->post('id'));
        $this->db->update('tbl_parallel');

        redirect('Room/listParallel');
    }

    public function add()
    {
        $this->form_validation->set_rules('topic', 'Topic', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('meetingID', 'meetingID', 'required');
        $this->form_validation->set_rules('meetingPWD', 'meetingPWD', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Fail!</strong> add new Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        } else {
            $namaFileBaru = $this->input->post('name', true) . '' . time() . '-' . $_FILES["fileimport"]['name'];
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $namaFileBaru;

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');

            $data = [
                'topic' => $this->input->post('topic'),
                'meetingDate' => $this->input->post('date'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'meetingID' => $this->input->post('meetingID'),
                'meetingPWD' => $this->input->post('meetingPWD'),
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'description' => $this->input->post('description'),
                'link' => $this->input->post('link'),
                'meet' => $this->input->post('meet'),
                'foto' => $this->upload->data('file_name')
            ];

            $this->db->insert('tbl_meeting', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Adding new Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        }
        redirect('Room/');
    }

    public function seeParticipant($id)
    {
        $data['participant'] = $this->db->query('SELECT * FROM tbl_participant WHERE id = ' . $id . '')->result_array();
        $this->load->view('temp/header');
        $this->load->view('listParticipant', $data);
        $this->load->view('temp/footer');
    }

    public function joinMeeting()
    {
        $this->load->view('temp/header');
        $this->load->view('joinMeeting');
        $this->load->view('temp/footer');
    }

    public function listRoom()
    {
        $this->load->view('temp/header');
        $this->load->view('listRoom');
        $this->load->view('temp/footer');
    }

    public function meeting($id)
    {
        $sql = $this->db->query('SELECT * FROM tbl_meeting WHERE idMeeting = ' . $id . '')->result_array();

        foreach ($sql as $dtSql) {
            $data['meetingID'] = $dtSql['meetingID'];
            $data['meetingPWD'] = $dtSql['meetingPWD'];
            $data['email'] = $this->session->userdata('name');
            $participant = $dtSql['participant'];
        }

        $participant++;
        $dataParticipant = [
            'participant' => $participant
        ];

        $this->db->set($dataParticipant);
        $this->db->where('idMeeting', $id);
        $this->db->update('tbl_meeting');

        $dataInsert = [
            'id' => $id,
            'participant' => $this->session->userdata('username')
        ];

        $this->db->insert('tbl_participant', $dataInsert);
        //var_dump($data);
        $this->load->view('joinm', $data);
    }

    public function joinAnother()
    {
        $id = $this->input->post('id');
        $link = $this->input->post('link');
        $sql = $this->db->query('SELECT * FROM tbl_meeting WHERE idMeeting = ' . $id . '')->result_array();

        foreach ($sql as $dtSql) {
            $data['meetingID'] = $dtSql['meetingID'];
            $data['meetingPWD'] = $dtSql['meetingPWD'];
            $data['email'] = $this->session->userdata('name');
            $participant = $dtSql['participant'];
        }

        $participant++;
        $dataParticipant = [
            'participant' => $participant
        ];

        $this->db->set($dataParticipant);
        $this->db->where('idMeeting', $id);
        $this->db->update('tbl_meeting');

        $dataInsert = [
            'id' => $id,
            'participant' => $this->session->userdata('username')
        ];

        $this->db->insert('tbl_participant', $dataInsert);

        redirect($link);
    }

    public function joinAnotherParallel()
    {
        $id = $this->input->post('id');
        $link = $this->input->post('link');
        $sql = $this->db->query('SELECT * FROM tbl_parallel WHERE idParallel = ' . $id . '')->result_array();
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();

        foreach ($sql as $dtSql) {
            $data['meetingID'] = $dtSql['meetingID'];
            $data['meetingPWD'] = $dtSql['meetingPWD'];
            $data['email'] = $this->session->userdata('name');
            $participant = $dtSql['participant'];
        }

        $participant++;
        $dataParticipant = [
            'participant' => $participant
        ];

        $this->db->set($dataParticipant);
        $this->db->where('idParallel', $id);
        $this->db->update('tbl_parallel');

        $dataInsert = [
            'id' => $id,
            'participant' => $this->session->userdata('username')
        ];

        $this->db->insert('tbl_participant', $dataInsert);

        redirect($link);
    }

    public function meetingParallel($id)
    {
        $sql = $this->db->query('SELECT * FROM tbl_parallel WHERE idParallel = ' . $id . '')->result_array();
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();

        foreach ($sql as $dtSql) {
            $data['meetingID'] = $dtSql['meetingID'];
            $data['meetingPWD'] = $dtSql['meetingPWD'];
            $data['email'] = $this->session->userdata('name');
            $participant = $dtSql['participant'];
        }

        $participant++;
        $dataParticipant = [
            'participant' => $participant
        ];

        $this->db->set($dataParticipant);
        $this->db->where('idParallel', $id);
        $this->db->update('tbl_parallel');

        $dataInsert = [
            'id' => $id,
            'participant' => $this->session->userdata('username')
        ];

        $this->db->insert('tbl_participant', $dataInsert);

        $this->load->view('joinm', $data);
    }

    public function paralel()
    {
        //$data['parallel'] = $this->db->query('SELECT * FROM tbl_parallel WHERE meetingDate = DATE_FORMAT(NOW(), "%Y-%m-%d") AND  TIME_FORMAT(NOW(), "%H:%i:%s") >= meetingTimeStart 
        //AND TIME_FORMAT(NOW(), "%H:%i:%s") <= meetingTimeEnd ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
        $data['parallel'] = $this->db->query('SELECT * FROM tbl_parallel')->result_array();
        $data['papper'] = $this->db->query('SELECT * FROM tbl_papper')->result_array();
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);

        $data['session'] = $this->db->query('SELECT * FROM tbl_session')->result_array();

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
        $data['info'] = $this->db->query('SELECT * FROM tbl_info  ORDER BY idInfo DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/paralel', $data);
        $this->load->view('temp/footer');
    }

    public function planary()
    {
        $data['meeting'] = $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting WHERE meetingDate = DATE_FORMAT(NOW(), "%Y-%m-%d") AND category = "Plenary" AND TIME_FORMAT(NOW(), "%H:%i:%s") >= meetingTimeStart 
        AND TIME_FORMAT(NOW(), "%H:%i:%s") <= meetingTimeEnd ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
        
        //$data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting')->result_array();


        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);
        $data['info'] = $this->db->query('SELECT * FROM tbl_info  ORDER BY idInfo DESC')->result_array();

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/planary', $data);
        $this->load->view('temp/footer');
    }

    public function support()
    {
        $data['meeting'] = $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting WHERE category = "Support" AND TIME_FORMAT(NOW(), "%H:%i:%s") >= meetingTimeStart 
        AND TIME_FORMAT(NOW(), "%H:%i:%s") <= meetingTimeEnd ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);
        $data['info'] = $this->db->query('SELECT * FROM tbl_info  ORDER BY idInfo DESC')->result_array();

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
        $data['meeting'] = $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting WHERE category = "Planary" ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/planary', $data);
        $this->load->view('temp/footer');
    }

    public function information()
    {
        $data['meeting'] = $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting WHERE meetingDate = DATE_FORMAT(NOW(), "%Y-%m-%d") AND  category = "Information" AND TIME_FORMAT(NOW(), "%H:%i:%s") >= meetingTimeStart 
        AND TIME_FORMAT(NOW(), "%H:%i:%s") <= meetingTimeEnd ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);
        $data['info'] = $this->db->query('SELECT * FROM tbl_info  ORDER BY idInfo DESC')->result_array();

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/information', $data);
        $this->load->view('temp/footer');
    }

    public function sica()
    {
        $data['meeting'] = $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting WHERE category = "Sica" ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/sica', $data);
        $this->load->view('temp/footer');
    }

    public function workshop()
    {
        $data['meeting'] = $data['meeting'] = $this->db->query('SELECT * FROM tbl_meeting WHERE meetingDate = DATE_FORMAT(NOW(), "%Y-%m-%d") AND  category = "Workshop & Coaching" AND TIME_FORMAT(NOW(), "%H:%i:%s") >= meetingTimeStart 
        AND TIME_FORMAT(NOW(), "%H:%i:%s") <= meetingTimeEnd ORDER BY meetingDate, meetingTimeStart DESC')->result_array();


        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);
        $data['info'] = $this->db->query('SELECT * FROM tbl_info  ORDER BY idInfo DESC')->result_array();

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/workshop', $data);
        $this->load->view('temp/footer');
    }

    public function resources()
    {
        $data['resources'] = $this->db->query('SELECT * FROM tbl_resources  ORDER BY idResources DESC')->result_array();
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);
        $data['info'] = $this->db->query('SELECT * FROM tbl_info  ORDER BY idInfo DESC')->result_array();

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/resources', $data);
        $this->load->view('temp/footer');
    }

    public function exchibition()
    {
        $data['fun'] = $this->db->query('SELECT * FROM tbl_exchibition WHERE category = "Fun Workshop"  ORDER BY idExchibition DESC')->result_array();
        $data['exercises'] = $this->db->query('SELECT * FROM tbl_exchibition WHERE category = "Exercises"  ORDER BY idExchibition DESC')->result_array();
        $data['exhi'] = $this->db->query('SELECT * FROM tbl_exhi  ORDER BY idExhi DESC')->result_array();
        $d = '%Y-%m-%d';
        $time = time();
        $tgl = mdate($d, $time);
        $data['info'] = $this->db->query('SELECT * FROM tbl_info  ORDER BY idInfo DESC')->result_array();

        //var_dump($data['fun']);

        $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/exchibition', $data);
        $this->load->view('temp/footer');
    }



    public function Vexchibition()
    {
        $id = $this->input->post('id');
        $data['exchibition'] = $this->db->query('SELECT * FROM tbl_exchibition WHERE idExchibition = ' . $id . '')->result_array();
        $this->load->view('temp/header');
        $this->load->view('user/v-exchibition', $data);
        $this->load->view('temp/footer');
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->form_validation->set_rules('id', ' Id Meeting', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Delete Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        } else {
            $data = ['idMeeting' => $id];

            $this->db->delete('tbl_meeting', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Delete Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        }

        redirect('Room/');
    }

    public function deleteParallel()
    {
        $id = $this->input->post('id');
        $this->form_validation->set_rules('id', ' Id Meeting', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Delete Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        } else {
            $data = ['idParallel' => $id];

            $this->db->delete('tbl_parallel', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Delete Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        }

        redirect('Room/listParallel');
    }

    public function hyperlink()
    {
        $category = $this->input->post('category');
        if ($category == "Parallel") {
            redirect('Room/paralel');
        } elseif ($category == "Plenary") {
            redirect('Room/planary');
        } elseif ($category == "Information") {
            redirect('Room/information');
        } elseif ($category == "Workshop") {
            redirect('Room/workshop');
        }
    }

    public function choice()
    {
        $category = $this->input->post('category');
        if ($category == "Parallel") {
            $data['category'] = $category;
            $this->load->view('temp/header');
            $this->load->view('addRoomParallel', $data);
            $this->load->view('temp/footer');
        } elseif (($category == "Plenary") or ($category == "Workshop & Coaching") or ($category == "Information")) {
            $data['category'] = $category;
            $this->load->view('temp/header');
            $this->load->view('addRoom', $data);
            $this->load->view('temp/footer');
        }
    }

    public function addRoomParallel()
    {
        $data['session'] = $this->db->query('SELECT DISTINCT session FROM tbl_session')->result_array();
        $this->load->view('temp/header');
        $this->load->view('addRoomParallel', $data);
        $this->load->view('temp/footer');
    }

    public function listParallel()
    {
        $data['meeting'] = $this->db->query('SELECT * FROM tbl_parallel ORDER BY meetingDate, meetingTimeStart DESC')->result_array();
        $this->load->view('temp/header');
        $this->load->view('listParallel', $data);
        $this->load->view('temp/footer');
    }

    public function parallelDetail()
    {
        $session = $this->input->post('session');
        $data['session'] = $this->db->query('SELECT * FROM tbl_session WHERE session = "' . $session . '"')->result_array();
        $this->load->view('temp/header');
        $this->load->view('parallelDetail', $data);
        $this->load->view('temp/footer');
    }

    public function editParallelProses()
    {

        $this->form_validation->set_rules('meetingID', 'meetingID', 'required');
        $this->form_validation->set_rules('meetingPWD', 'meetingPWD', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Fail!</strong> add new Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        } else {
            $namaFileBaru = $this->input->post('name', true) . '' . time() . '-' . $_FILES["fileimport"]['name'];
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $namaFileBaru;

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');

            $data = [
                'topic' => $this->input->post('topic'),
                'meetingDate' => $this->input->post('date'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'meetingID' => $this->input->post('meetingID'),
                'meetingPWD' => $this->input->post('meetingPWD'),
                'speakername' => $this->input->post('speakername'),
                'chairname' => $this->input->post('chairname'),
                'description' => $this->input->post('description'),
                'meet' => $this->input->post('meet'),
                'link' => $this->input->post('link'),
                'kodeSession' => $this->input->post('session'),
                'linkRec' => $this->input->post('linkRec'),
                'foto' => $this->upload->data('file_name')
            ];

            $this->db->set($data);
            $this->db->where('idParallel', $this->input->post('id'));
            $this->db->update('tbl_parallel');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Adding new Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        }
        redirect('Room/listParallel');
    }

    public function addParallel()
    {

        $this->form_validation->set_rules('topic', 'Topic', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('meetingID', 'meetingID', 'required');
        $this->form_validation->set_rules('meetingPWD', 'meetingPWD', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Fail!</strong> add new Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        } else {
            $namaFileBaru = $this->input->post('name', true) . '' . time() . '-' . $_FILES["fileimport"]['name'];
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $namaFileBaru;

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');

            $data = [
                'topic' => $this->input->post('topic'),
                'meetingDate' => $this->input->post('date'),
                'meetingTimeStart' => $this->input->post('timeStart'),
                'meetingTimeEnd' => $this->input->post('timeEnd'),
                'meetingID' => $this->input->post('meetingID'),
                'meetingPWD' => $this->input->post('meetingPWD'),
                'speakername' => $this->input->post('speakername'),
                'description' => $this->input->post('description'),
                'linkRec' => $this->input->post('linkRec'),
                'chairname' => $this->input->post('chairname'),
                'link' => $this->input->post('link'),
                'meet' => $this->input->post('meet'),
                'kodeSession' => $this->input->post('session'),
                'foto' => $this->upload->data('file_name')
            ];

            $this->db->insert('tbl_parallel', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Adding new Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        }
        redirect('Room/listParallel');
    }

    public function papper($id)
    {
        $data['papper'] = $this->db->query('SELECT * FROM tbl_papper WHERE idParallel = ' . $id . '')->result_array();
        $data['id'] = $id;

        $this->load->view('temp/header');
        $this->load->view('papper', $data);
        $this->load->view('temp/footer');
    }

    public function addPapper()
    {
        $this->form_validation->set_rules('id', 'idParallel', 'required');
        $this->form_validation->set_rules('judulPapper', 'idParallel', 'required');
        $this->form_validation->set_rules('presenter', 'idParallel', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Fail!</strong> add new Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        } else {
            $data = [
                'idParallel' => $this->input->post('id'),
                'judulPapper' => $this->input->post('judulPapper'),
                'sesi' => $this->input->post('sesi'),
                'presenter' => $this->input->post('presenter')
            ];

            $this->db->insert('tbl_papper', $data);
        }

        redirect('Room/papper/' . $this->input->post('id'));
    }

    public function deletePapper()
    {
        $data = [
            'idPapper' => $this->input->post('id')
        ];

        $this->db->delete('tbl_papper', $data);
        redirect('Room/papper/' . $this->input->post('id'));
    }


    public function editPapper()
    {
        $this->form_validation->set_rules('id', 'idParallel', 'required');
        $this->form_validation->set_rules('judulPapper', 'idParallel', 'required');
        $this->form_validation->set_rules('presenter', 'idParallel', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Fail!</strong> add new Data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        } else {
            $data = [
                'judulPapper' => $this->input->post('judulPapper'),
                'presenter' => $this->input->post('presenter'),
                'sesi' => $this->input->post('sesi'),
            ];

            $this->db->set($data);
            $this->db->where('idPapper', $this->input->post('idPapper'));
            $this->db->update('tbl_papper');
        }

        redirect('Room/papper/' . $this->input->post('id'));
    }

    public function presentation()
    {
        $this->form_validation->set_rules('stream', 'stream', 'required');

        if ($this->form_validation->run() == false) {
            $data['streamer'] = $this->db->query('SELECT DISTINCT speakername FROM tbl_parallel ORDER BY speakername ASC')->result_array();
            $data['presentation'] = $this->db->query('SELECT * FROM tbl_parallel')->result_array();
            $data['session'] = $this->db->query('SELECT * FROM tbl_session')->result_array();
            $d = '%Y-%m-%d';
            $time = time();
            $tgl = mdate($d, $time);
            $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
            $this->load->view('temp/header');
            $this->load->view('user/presentation', $data);
            $this->load->view('temp/footer');
        } else {
            if ($this->input->post('stream') == "All") {
                $data['streamer'] = $this->db->query('SELECT DISTINCT speakername FROM tbl_parallel ORDER BY speakername ASC')->result_array();
                $data['presentation'] = $this->db->query('SELECT * FROM tbl_parallel')->result_array();
                $data['session'] = $this->db->query('SELECT * FROM tbl_session')->result_array();
                $d = '%Y-%m-%d';
                $time = time();
                $tgl = mdate($d, $time);
                $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
                $this->load->view('temp/header');
                $this->load->view('user/presentation', $data);
                $this->load->view('temp/footer');
            } else {
                $data['streamer'] = $this->db->query('SELECT DISTINCT speakername FROM tbl_parallel ORDER BY speakername ASC')->result_array();
                $data['presentation'] = $this->db->query('SELECT * FROM tbl_parallel where speakername = "' . $this->input->post('stream') . '"')->result_array();
                $data['session'] = $this->db->query('SELECT * FROM tbl_session')->result_array();
                $d = '%Y-%m-%d';
                $time = time();
                $tgl = mdate($d, $time);
                $data['polling'] = $this->db->query('SELECT * FROM tbl_polling WHERE idPolling NOT IN
            (select idPolling from tbl_polling_answer WHERE username = "' . $this->session->userdata['username'] . '") AND tanggal = "' . $tgl . '"')->result_array();
                $this->load->view('temp/header');
                $this->load->view('user/presentation', $data);
                $this->load->view('temp/footer');
            }
        }
    }
}
