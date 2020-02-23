<!-- Jobsheet 2 Praktikum Bagian 1 Langkah 10 A -->
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        // Jobsheet 2 Praktikum Bagian 1 Langkah 10 B

        /*         $query=$this->db->get('mahasiwa');
            
            return $query->result_array(); */

        // Jobsheet 2 Praktikum Bagian 1 Langkah 10 C

        return $this->db->get('mahasiswa')->result_array();
    }

    // Jobsheet 2 Praktikum Bagian 3 Langkah 3
    public function tambahdatamhs()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        );
        $this->db->insert('mahasiswa', $data);
    }

    // Jobsheet 3 Praktikum Bagian 2 Langkah 8
    public function hapusdatamhs($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}

/* End of file mahasiswa_model.php */

?>