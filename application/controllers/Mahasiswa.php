<!-- Praktikum 3 Nomor 20 -->
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{

    public function index()
    {
        // $this->load->view('template/header');

        // Point 5
        $data['title'] = 'List Mahasiswa';
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index');
        $this->load->view('template/footer');
    }
}
    
    /* End of file mahasiswa.php */