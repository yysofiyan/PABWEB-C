<?php
class mahasiswa_model extends CI_Model
{
    public function lihat_data()
    {
        return $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left')
        ->get('mahasiswa')->result();
    }
}