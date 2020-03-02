<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index($nama = '')
    {
        $data['title'] = 'Home';
        //  Jobsheet 5 Praktikum Bagian 1 Langkah 28
        // $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        // echo "Selamat Datang di halaman Home";
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');

        //  Jobsheet 5 Praktikum Bagian 1 Langkah 26
        if ($this->session->userdata('level') != "admin") {
            redirect('login', 'refresh');
        }
    }
}
    
    /* End of file Home.php */