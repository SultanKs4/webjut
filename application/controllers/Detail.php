<?php

defined('BASEPATH') or exit('No direct script access allowed');

class detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        if ($this->session->userdata('user_id') == null) {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Detail Mahasiswa';
        $this->load->view('template/header_login', $data);
        $this->load->view('detail/index');
        $this->load->view('template/footer');
    }

    public function mahasiswa($id)
    {
        if ($id != $this->session->userdata('user_id')) {
            redirect('detail/index');
        }
        $data['title'] = 'Detail Mahasiswa ' . $this->session->userdata('user');
        $data['mahasiswa'] = $this->mahasiswa_model->getmahasiswaByID($id);
        $this->load->view('template/header_login', $data);
        $this->load->view('detail/siswa_detail', $data);
        $this->load->view('template/footer');
    }
}

/* End of file detail.php */