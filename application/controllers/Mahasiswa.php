<!-- Praktikum 3 Nomor 20 -->
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{
    //  Jobsheet 2 Praktikum Bagian 1 Langkah 5
    //  Jobsheet 2 Praktikum Bagian 1 Langkah 3
    public function __construct()
    {
        // $this->load->database();
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }

    //  Jobsheet 2 Praktikum Bagian 2 Langkah 3
    public function tambah()
    {
        $data['title'] = 'Form Menambahkan Data Mahasiswa';

        //  Jobsheet 2 Bagian 2 Langkah 7 E
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        //  Jobsheet 2 Bagian 2 Langkah 7 J
        //  Jobsheet 2 Bagian 2 Langkah 7 N (Add Numerin)
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        //  Jobsheet 2 Bagian 2 Langkah 7 L Valid Email
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        //  Jobsheet 2 Bagian 2 Langkah 7 B
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        } else {
            //  Jobsheet 2 Bagian 3 Langkah 1
            $this->mahasiswa_model->tambahdatamhs();
            redirect('mahasiswa', 'refresh');
        }
    }

    public function index()
    {
        // $this->load->view('template/header');

        //  Jobsheet 2 Praktikum Bagian 1 Langkah 11
        // $this->load->model('mahasiswa_model');

        //  Jobsheet 2 Praktikum Bagian 1 Langkah 2
        //  Modul untuk load database
        // $this->load->database();

        // Point 5
        $data['title'] = 'List Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }
}
    
    /* End of file mahasiswa.php */