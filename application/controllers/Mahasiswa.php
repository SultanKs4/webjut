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
        //  Jobsheet 4 Bagian 1 Langkah 7 F
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin'];

        //  Jobsheet 2 Bagian 2 Langkah 7 E
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        //  Jobsheet 2 Bagian 2 Langkah 7 J
        //  Jobsheet 2 Bagian 2 Langkah 7 N (Add Numerin)
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
        //  Jobsheet 2 Bagian 2 Langkah 7 L Valid Email
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        //  Jobsheet 4 Tugas
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');

        //  Jobsheet 2 Bagian 2 Langkah 7 B
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        } else {
            //  Jobsheet 2 Bagian 3 Langkah 1
            $this->mahasiswa_model->tambahdatamhs();

            // Jobsheet 3 Bagian 1 Langkah 4
            $this->session->set_flashdata('flash-data', 'ditambahkan');

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
        // Jobsheet 4 Praktikum Bagian 2 Langkah 4
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    // Jobsheet 3 Praktikum Bagian 2 Langkah 7
    public function hapus($id)
    {
        $this->mahasiswa_model->hapusdatamhs($id);
        $this->session->set_flashdata('flash-data', 'dihapus');

        redirect('mahasiswa', 'refresh');
    }

    // Jobsheet 4 Praktikum Bagian 1 Langkah 4
    public function detail($id)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getmahasiswaByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getmahasiswaByID($id);
        //  Jobsheet 4 Bagian 1 Langkah 7 F
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin'];


        //  Jobsheet 4 Bagian 1 Langkah 7 C
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        //  Jobsheet 4 Tugas
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');

        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->mahasiswa_model->ubahdatamhs();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('mahasiswa', 'refresh');
        }
    }
}
    
    /* End of file mahasiswa.php */