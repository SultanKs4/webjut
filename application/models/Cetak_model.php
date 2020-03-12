<!--  Jobsheet 6 Praktikum Bagian 2 langkah 6 -->
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cetak_model extends CI_Model
{

    public function view()
    {
        $this->db->select('nama, email, jurusan');
        return $this->db->get('mahasiswa')->result();
    }
}
    
    /* End of file cetal_model.php */