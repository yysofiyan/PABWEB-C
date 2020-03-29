<?php

class Mahasiswa_model extends CI_Model
{
	// metode result
	public function lihatData()
	{
		return $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left')->get('mahasiswa')->result();
	}

	public function metodeResultArray()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

	public function metodeRow()
	{
		return $this->db->where('id_mahasiswa', 1)->get('mahasiswa')->row();
	}

	public function metodeRowArray()
	{
		return $this->db->where('id_mahasiswa', 1)->get('mahasiswa')->row_array();
	}

	public function insertData($data)
	{
		return $this->db->insert('mahasiswa', $data);
	}
}
