<!-- Jobsheet 5 Praktikum Bagian 1 Langkah 19 -->
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->model('mahasiswa_model');
        $this->load->model('cetak_model');


        //  Jobsheet 5 Praktikum Bagian 1 Langkah 25
        if ($this->session->userdata('level') != "user") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->datatables();
        $this->load->view('template/header_datatables_user', $data);
        $this->load->view('mahasiswa/user', $data);
        $this->load->view('template/footer_datatables_user');
    }

    // Jobsheet 6 Praktikum Bagian 2 langkah 5
    public function laporan_pdf()
    {
        $this->load->library('pdf');
        $data['mahasiswa'] = $this->cetak_model->view();

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('mahasiswa/laporan', $data);
    }
}
    
    /* End of file user.php */