<?php

class Prodi_model extends CI_Model
{
    public function lihat_data()
    {
        return $this->db->get('prodi')->result();
    }
}