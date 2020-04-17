<?php
class mahasiswa_model extends CI_Model
{
    public function lihatData()
    {
        return $this->db->get('mahasiswa')->result();
    }
    public function metodeResult()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    public function metodeRow()
    {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }
    public function metodeResultArray()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }
    public function metodeRowArray()
    {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row_array();
    }
    public function lihat_data()
    {
        return $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left')
        ->get('mahasiswa')->result();
    }
}