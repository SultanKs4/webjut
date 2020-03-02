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

        //  Jobsheet 5 Praktikum Bagian 1 Langkah 25
        if ($this->session->userdata('level') != "user") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('mahasiswa/user');
    }
}
    
    /* End of file user.php */