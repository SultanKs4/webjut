<!-- Jobsheet 5 Praktikum Bagian 1 Langkah 2 -->
<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');

class login extends CI_Controller
{

    // Jobsheet 5 Praktikum Bagian 1 Langkah 9
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('template/header_login', $data);
        $this->load->view('login/index');
        $this->load->view('template/footer');
    }

    // Jobsheet 5 Praktikum Bagian 1 Langkah 10
    public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars(md5($this->input->post('password')));

        $ceklogin = $this->login_model->login($username, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row);
            //set userdata pada session dengan nama user dan isi username kita isikan username yg ada pada $row
            $this->session->set_userdata('user', $row->username);
            $this->session->set_userdata('level', $row->level);
            $this->session->set_userdata('user_id', $row->user_id);

            if ($this->session->userdata('level') == "admin") {
                redirect('mahasiswa/index');
            } elseif ($this->session->userdata('level') == "user") {
                if ($this->session->userdata('user_id') != null) {
                    $user_id = $this->session->userdata('user_id');
                    redirect('detail/mahasiswa/' . $user_id);
                } else {
                    // Jobsheet 5 Praktikum Bagian 1 Langkah 18
                    redirect('user');
                }
            }
        } else {
            // Jobsheet 5 Praktikum Bagian 1 Langkah 16
            $data['pesan'] = "username dan password anda salah";
            $data['title'] = 'Login';
            $this->load->view('template/header_login', $data);
            $this->load->view('login/index');
            $this->load->view('template/footer');
            // redirect('login/index', 'refresh');
        }
    }
    // Jobsheet 5 Langkah 1 Bagian 22
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}